<div class="w-full">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-2xl p-2">Register</h1>
        <form wire:submit.prevent="register" class="flex flex-col bg-blue-200 p-2 rounded shadow m-4">
            <label for="name" class="pb-1">Name:</label>
            <input type="name" name="name" wire:model.lazy="name" class="rounded p-2">
            <label for="email" class="pb-1">Email:</label>
            <input type="email" name="email" wire:model.lazy="email" class="rounded p-2">
            <label for="password" class="pb-1">Password:</label>
            <input type="password" name="password" wire:model.lazy="password" class="rounded p-2">
            <label for="password" class="pb-1">Confirm Password:</label>
            <input type="password" name="confirm_password" wire:model.lazy="confirmPassword" class="rounded p-2">
            <button type="submit" class="p-2 bg-green-500 text-white rounded mt-2">Register</button>
        </form>
        <div>{{ $passwordMatch }}</div>

    </div>
</div>
