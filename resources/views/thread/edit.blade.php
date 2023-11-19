<x-app-layout>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <section class="rounded-md bg-gradient-to-r from-slate-300 to-slate-600 flex mb-4">
                <article>
                    <hgroup>
                        <div class="p-4">
                            <h2 class="mb-4 flex items-start justify-between">
                                Editar pregunta
                            </h2>
                            
                            <form action="{{ route('thread.update', $thread) }}" method="post"></form>
                            @csrf
                            @method('PUT')

                            @include('thread.form')

                            <input
                                type="submit"
                                value="Editar pregunta"
                                class="w-full py-4 bg-gradient-to-r from-blue-400 to-blue-700 hover:to-blue-600 text-white/90 font-bold text-xs rounded-md">
                        </div>
                    </hgroup>
                </article>
            </section>
            <div>
    </div>

</x-app-layout>
