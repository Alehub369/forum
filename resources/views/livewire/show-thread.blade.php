<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <section class="rounded-md bg-gradient-to-r from-slate-300 to-slate-600 flex mb-4">
            <article>
                <hgroup>
                    <div class="p-4 flex gap-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg" style="width:50px; height:50px" class="rounded-md">
                    </div>
                    <div class="w-full px-6 py-3">
                        <h2 class="mb-4 flex items-start justify-between">
                                {{ $thread->title }}
                                
                            <span
                            class="rounded-full text-xm py-2 px-4 capitalize"
                            style="color: {{ $thread->category->color }}; border: 1px solid {{ $thread->category->color }};">
                            {{ $thread->category->name }}
                            </span>
                        </h2>
                        <p class="mb-4 text-blue-600 font-semibold text-xs">
                            {{ $thread->user->name }}
                        </p> 
                    </div>
                </hgroup>
            </article>
        </section>
        <div>

        <!-- @foreach ($replies as $reply)
            <livewire:show-reply :$reply :key="$reply->id" />
        @endforeach Respuesta --> 

        <!-- formulario -->

        <form wire:submit="postReply">
            <input 
            wire:model="body"
            type="text" 
            placeholder="Escribo una respuesta"
            class="bg-slate-300 border-0 rounded-md w-1/2 p-6 text-black/70 text-xs">
        </form>

</div>











