<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagePage extends Component
{
    public $image = [];
    public function mount($hash)
    {
        $rawImage = File::where('short_hash', $hash)->first();
        if(!$rawImage){
            return redirect()->route('home');
        }
        $this->image = [
            'url' => Storage::url($rawImage->path),
            'filename' => $rawImage->filename,
            'created_at' => $rawImage->created_at->toDateTimeString(),
            'short_hash' => $rawImage->short_hash
        ];
    }

    public function render()
    {
        return view('livewire.image-page', [
            'image' => $this->image
        ]);
    }
}
