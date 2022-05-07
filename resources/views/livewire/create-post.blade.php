<div>
    {{ $body }}
    <textarea wire:model="body" name="body"
        class="appearance-none rounded-none relative block w-full px-3 py-2 
border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md 
focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 
sm:text-sm"
        rows="3" placeholder="Tulis Sesuatu..."></textarea>
    <div class="flex justify-end mt-2">
        <button wire:click="createPost" class="btn btn-primary px-4 py-2">Post</button>
    </div>

</div>
