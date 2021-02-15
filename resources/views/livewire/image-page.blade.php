<div class="w-full flex justify-center">
    <div class="w-3/6 border shadow p-2">
        <h1 class="text-xl">{{ $image['filename'] }}</h1>
        <img src="{{ $image['url'] }}" alt="">
        <div>{{ $image['created_at'] }}</div>
    </div>
</div>
