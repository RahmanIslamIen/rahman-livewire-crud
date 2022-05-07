<div class="p-4 flex-col">
    @foreach ($posts as $post)
        <div class="flex flex-col p-4 my-2 bg-white shadow-xl rounded-md">
            <span class="text-xl font-bold">{{ $post->user->name }}</span>
            <span>{{ $post->body }}</span>
        </div>
    @endforeach
</div>
