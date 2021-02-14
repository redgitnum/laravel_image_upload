<div class="w-full">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-2xl p-2">Login</h1>
        <form wire:submit.prevent="login" class="flex flex-col bg-blue-200 p-2 rounded shadow m-4">
            <label for="email" class="pb-1">Email:</label>
            <input type="email" name="email" wire:model.defer="email" class="rounded p-2">
            <label for="password" class="pb-1">Password:</label>
            <input type="password" name="password" wire:model.defer="password" class="rounded p-2">
            <button type="submit" class="p-2 bg-green-500 text-white rounded mt-2">Login</button>
        </form>
        @error('error')
            <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
    </div>
</div>
