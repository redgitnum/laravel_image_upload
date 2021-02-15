<div class="w-full">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-2xl p-2">Dashboard</h1>
        <div class="flex flex-wrap border border-blue-200 shadow p-2 rounded w-4/5">
            @foreach($images as $image)
                <a href="{{ route('image', $image['short_hash']) }}" class="m-0.5 border relative group">
                    <img src="{{ $image['url'] }}" class="h-40" alt="">
                    <div class="absolute bottom-0 opacity-0 group-hover:opacity-60 transition text-right text-xs bg-black text-white px-1 py-0.5 w-full">{{ $image['created_at'] }}</div>
                    <div class="absolute top-0 opacity-0 group-hover:opacity-60 transition bg-black text-white px-1 py-0.5 w-full">{{ $image['filename'] }}</div>
                </a>
            @endforeach
        </div>
    </div>
</div>
