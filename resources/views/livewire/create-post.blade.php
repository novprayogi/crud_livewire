<div class="p-4">
	{{ $body }}
    <textarea wire:model="body" rows="3" placeholder="Post Something..." class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"></textarea>
    <div class="mt-2 flex justify-end">
    	<button wire:click="createPost" class="bg-blue-500 p-3 hover:bg-blue-100">Post</button>
    </div>
</div>
