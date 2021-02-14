<?php

namespace App\Http\Livewire;

use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
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
            'filename' => $this->file->getClientOriginalName(),
            'path' => $filepath,
            'user_id' => 1
        ]);
        $this->reset('file');
        $this->inputId++;
        $this->uploadSuccess = true;
    }
}
