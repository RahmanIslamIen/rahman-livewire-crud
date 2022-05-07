<div class="p-4 flex-col">
    @foreach ($posts as $post)
        <div class="p-4 my-4 bg-white shadow-xl rounded-md">
            <div class="block">
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <div>
                <span>{{ $post->body }}</span>
            </div>
        </div>
    @endforeach
</div>
