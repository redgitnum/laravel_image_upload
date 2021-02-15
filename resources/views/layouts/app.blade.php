<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel file system</title>
    @livewireStyles
</head>
<body>
    <div class="w-full bg-blue-200 p-2 flex justify-between">
        <div>
            @auth()
                <a href="{{ route('home') }}" class="text-lg px-2">Upload</a>
            @endauth
        </div>
        <div>
            @auth()
                <a href="{{ route('dashboard') }}" class="text-lg px-2">{{ auth()->user()->name }}</a>
                <a href="{{ route('logout') }}" class="text-lg px-2 hover:opacity-60">Logout</a>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="text-lg px-2 hover:opacity-60">Login</a>
                <a href="{{ route('register') }}" class="text-lg px-2 hover:opacity-60">Register</a>
            @endguest

        </div>

    </div>
    {{ $slot }}
@livewireScripts
</body>
</html>