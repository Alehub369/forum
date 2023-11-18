<div>
    <div class="rounded-md bg-gradient-to-r from-slate-300 to-slate-600 hover:to-slate-800 mb-4">
        <div class="p-4 flex gap-4">
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg" style="width:50px; height:50px" class="rounded-md">
            </div>
            <div class="w-full px-6 py-3">
                <p class="mb-2 text-blue-600 font-semibold text-xs">
                    {{ $reply->user->name }}
                </p>



                @if ($is_editing)
                <form wire:submit="updateReply" class="mt-4">
                    <input 
                    wire:model="body"
                    type="text" 
                    class="bg-slate-300 border-0 rounded-md w-1/2 p-6 text-black/70 text-xs">
                </form>
                @else
                <p class="text">{{ $reply->body }}</p>
                @endif

                @if ($is_creating)
                <form wire:submit="postChild" class="mt-4">
                    <input 
                    wire:model="body"
                    type="text" 
                    placeholder="Escribo una respuesta"
                    class="bg-slate-300 border-0 rounded-md w-1/2 p-6 text-black/70 text-xs">
                </form>
                @endif

                <p class="mt-4 text-white/60 text-xs flex gap-2 justify-end">
                    @if (is_null($reply->reply_id))
                    <a href="#" wire:click="$toggle('is_creating')" class="hover:text-white">Responder</a>
                    @endif

                    @can ('update', $reply)
                    <a href="#" wire:click="$toggle('is_editing')" class="hover:text-white">Editar</a>
                    @endcan
                </p>
            </div>
        </div>
    </div>

    <div class="lg:px-8 ">
    @foreach($reply->replies as $item)
            @livewire('show-reply', ['reply' => $item], key('reply-'.$item->id))
    @endforeach
    </div>

</div>
