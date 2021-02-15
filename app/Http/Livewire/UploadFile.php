<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class UploadFile extends Component
{
    use WithFileUploads;

    public $file;
    public $inputId = 0;
    public $images;
    public $uploadSuccess = false;

    public function render()
    {
        return view('livewire.upload-file');
    }

    public function updatedFile()
    {
        $this->uploadSuccess = false;
    }


    public function upload()
    {
        $this->validate([
            'file' => 'image|max:1024'
        ]);

        $filepath = $this->file->store('public/images');
        File::create([
            'filename' => Str::beforeLast($this->file->getClientOriginalName(), '.'),
            'path' => $filepath,
            'user_id' => auth()->id(),
            'short_hash' => Str::random(12)
        ]);
        $this->reset('file');
        $this->inputId++;
        $this->uploadSuccess = true;
    }
}
