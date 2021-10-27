<div>
	{{ $updateId }}
    @foreach($posts as $p)
    <div class="flex flex-col p-4 my-2 bg-white shadow-xl rounded-md" >
    	<div>
    		<span class="text-xl font-bold">{{ $p->user->name }}</span>
    		<span >{{ $p->created_at->diffForHumans() }}</span>
    		<button wire:click="showUpdateForm({{ $p->id }})" class="p-2 bg-teal">Edit</button>
    	</div>
    	<div>
    		@if($updateId !== $p->id)
    			<span>{{ $p->body }}</span>
    		@endif

			@if($updateId === $p->id)
				<textarea 
				wire:model="body" 
				rows="3" 
				class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"></textarea>

				<button 
					wire:click="update({{ $p->id }})" 
					class="bg-blue-500 p-3 hover:bg-blue-100"
				>
					Save
				</button>
    		@endif    		
    	</div>
    </div>
    
    @endforeach
</div>
