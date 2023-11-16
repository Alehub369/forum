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
                <p class="text">
                    {{ $reply->body }}
                </p>
                <p class="mt-4 text-white/60 text-xs flex gap-2 justify-end">
                    <a href="" class="hover:text-white">Responder</a>
                    <a href="" class="hover:text-white">Editar</a>
                </p>
            </div>
        </div>
    </div>
</div>
