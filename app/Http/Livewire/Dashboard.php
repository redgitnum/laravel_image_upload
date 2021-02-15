<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Dashboard extends Component
{
    public $images;

    public function mount()
    {
        $tempImages = [];
        foreach (auth()->user()->files as $image) {
            $tempImages[] = [
                'url' => Storage::url($image->path),
                'filename' => $image->filename,
                'created_at' => $image->created_at->toDateTimeString(),
                'short_hash' => $image->short_hash
            ];
        }
        $this->images = $tempImages;
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
