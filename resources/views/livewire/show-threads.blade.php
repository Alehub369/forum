<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex gap-10 py-12">
    <div class="w-64">
         <a href="" class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-400 to-blue-700 hover:to-blue-600 text-white/90 font-bold text-xs text-center rounded-md">
            Preguntar
        </a>

        <ul>
            @foreach($categories as $category)
            <li class="mb-2">
                <a href="" class="p-2 rounded-md flex bg-slate-600 items-center gap-2 text-white/60 hover:text-white font-semibold
                text-xs capitalize">
                <span  class="w-2 h-2 rounded-full" style=" background-color: {{ $category->color }};"></span>
                    {{ $category->name }}
                </a>
            </li>
            @endforeach
            <li>
                <a href="" class="p-2 rounded-md flex bg-slate-500 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                    <span class="w-2 h-2 rounded-full"
                    style="background-color: #000;"></span>
                    Todos los resultados
                </a>
            </li>
        </ul>
    </div>

    
    <div class="w-full">

        <!-- Formulario -->

        @foreach($threads as $thread)
        <div class="rounded-md bg-gradient-to-r from-slate-300 to-slate-600 hover:to-slate-800 mb-4">
            <div class="p-4 flex gap-4">

                <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg" style="width:50px; height:50px" class="rounded-md">
                
                <!-- Imagen del profe que esta vinculada a la funcion del modelo user, hay que registrarse en la pagina de avatar, yo no quize
                <img src="{{ $thread->user->avatar }}" alt="{{ $thread->user->name }}"> -->

                <div class="w-full">
                    <h2 class="mb-4 flex items-start justify-between">
                        <a href="">
                            {{ $thread->title }}
                        </a>
                        <span
                        class="rounded-full text-xs py-2 px-4 capitalize"
                        style="color: {{ $thread->category->color }}; border: 1px solid {{ $thread->category->color }};">
                        {{ $thread->category->name }}
                    </span>
                    </h2>
                    <p class="flex items-center justify-between w-full text-xs">
                        <span class="text-blue-900 font-semibold">
                            {{ $thread->user->name }}

                            <span class="text-black/50">{{ $thread->created_at->diffForHumans() }}</span> 
                        </span>
                        <span class="flex items-center gap-1 text-gray-300">
                            <svg fill="none" class="h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"></path>
                            </svg>
                            {{ $thread->replies_count }}
                            Respuesta{{ $thread->replies_count !==1 ? 's' : '' }}

                            <a href="" class="hover:text-white">Editar</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
















