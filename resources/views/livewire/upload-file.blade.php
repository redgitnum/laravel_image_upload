<div class="grid place-content-center min-h-screen">
    <div class="bg-gray-300 shadow-xl p-2 flex flex-col justify-center items-center rounded">
        <h1 class="text-2xl">Upload Image</h1>
        <form wire:submit.prevent='upload' class="flex items-center my-4">
            <div>
                <input wire:model='file' type="file" name="file" id="{{ 'upload-'.$inputId }}">
                @error('file')
                    <div class="text-xs uppercase text-red-600 font-bold p-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="p-2 bg-blue-500 rounded hover:bg-blue-400 text-white">Upload</button>
        </form >
    </div>
    @if($uploadSuccess)
    <div class="bg-green-500 text-white p-2 rounded mt-2">
        Uploaded Successfully!
    </div>
    @endif
</div>
