<div class="grid place-content-center h-full mt-10">
    <div class="border-gray-300 border shadow-xl p-2 flex flex-col justify-center items-center rounded">
        <h1 class="text-2xl">Upload Image</h1>
        <form wire:submit.prevent='upload' class="flex items-center my-4">
            <div>
                <input class="p-2 m-2 border-blue-100 border shadow rounded" wire:model='file' type="file" name="file" id="{{ 'upload-'.$inputId }}">
                @error('file')
                    <div class="text-xs uppercase text-red-600 font-bold p-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="p-2 bg-blue-500 rounded hover:bg-blue-400 text-white">Upload</button>
        </form >
    </div>
    <div class="bg-green-500 text-white p-2 rounded mt-2 @if($uploadSuccess) visible @else invisible @endif">
        Uploaded Successfully!
    </div>
</div>
