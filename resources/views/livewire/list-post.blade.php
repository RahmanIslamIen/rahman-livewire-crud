<div class="p-4 flex-col">
    {{ $updateStateId }}
    @foreach ($posts as $post)
        <div class="p-4 my-4 bg-white shadow-xl rounded-md">
            <div class="block">
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
                <button wire:click="showUpdateForm({{ $post->id }})"
                    class="p-2 btn btn-success rounded-md">Edit</button>
                <button onclick="return confirm('benar mau dihapus?') || event.stopImmediatePropagation()"
                    wire:click="delete({{ $post->id }})" class="p-2 btn btn-danger rounded-md">Delete</button>
            </div>
            <div>
                @if ($updateStateId != $post->id)
                    <span>{{ $post->body }}</span>
                @endif

                @if ($updateStateId === $post->id)
                    <textarea wire:model="body" name="body"
                        class="appearance-none rounded-none relative block w-full px-3 py-2 
                        border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md 
                        focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 
                        sm:text-sm"
                        rows="3"></textarea>
                    <button wire:click="update({{ $post->id }})" class="m-2 btn btn-primary px-4 py-2">Save</button>
                @endif
            </div>
        </div>
    @endforeach
</div>
