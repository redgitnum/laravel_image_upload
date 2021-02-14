<div class="grid place-content-center min-h-screen">
    <div class="bg-gray-400 text-white shadow-xl p-2 flex flex-col justify-center items-center rounded">
        <h1 class="text-2xl">Upload File</h1>
        <form wire:submit.prevent='upload' class="flex items-center my-4">
            <div>
                <input wire:model='file' type="file" name="file" id="{{ 'upload-'.$inputId }}">
                @error('file')
                    <div class="text-xs uppercase text-red-200 font-bold p-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="p-2 bg-blue-500 rounded hover:bg-blue-400">Upload</button>
        </form >
    </div>
    <div class="flex flex-wrap justify-center items-center">
        @foreach($images as $image)
        <img class="h-48" src="{{ $image }}" alt="">
        @endforeach
    </div>
</div>
