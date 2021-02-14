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
    public function render()
    {
        return view('livewire.upload-file');
    }

    public function mount()
    {
        $rawImages = File::all();
        $images = [];
        foreach ($rawImages as $image) {
            array_push($images, Storage::url($image->path));
        }
        $this->images = $images;

    }

    public function upload()
    {
        $this->validate([
            'file' => 'max:1024'
        ]);

        $filepath = $this->file->store('public/images');
        File::create([
            'filename' => $this->file->getClientOriginalName(),
            'path' => $filepath,
            'user_id' => 1
        ]);
        $this->reset('file');
        $this->inputId++;
        $this->mount();
    }
}
