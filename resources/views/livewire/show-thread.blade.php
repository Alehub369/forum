<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex gap-10 py-12">
    <div class="rounded-md bg-gradient-to-r from-slate-300 to-slate-600 mb-4">
        <div class="p-4 flex gap-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg" style="width:50px; height:50px" class="rounded-md">
        </div>
            <div class="w-full px-6 py-3">
                <h2 class="mb-4 flex items-start justify-between">
                    <a href="{{ route('thread', $thread) }}" class="text-xl font-semibold text-black/70">
                        {{ $thread->title }}
                        
                    </a>
                    <span
                    class="rounded-full text-xm py-2 px-4 capitalize"
                    style="color: {{ $thread->category->color }}; border: 1px solid {{ $thread->category->color }};">
                    {{ $thread->category->name }}
                </span>
                </h2>
                <p class="mb-4 text-blue-600 font-semibold text-xs">
                    {{ $thread->user->name }}

                    <span class="text-black/50">{{ $thread->created_at->diffForHumans() }}</span> 
                </p>
                <p class="text">
                    {{ $thread->body }}
                </p>
            </div>
        </div>
    </div>
</div>
















