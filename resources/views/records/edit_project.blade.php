<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastros > Projetos > Editar') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
        <section class="py-3">
            <div class="container px-4 mx-auto">
                <div class="p-8 dark:bg-gray-800 bg-white rounded-xl">
                    <form method="post" action="{{route('project.update', $projeto->id)}}">
                        @method('put')
                        @csrf
                        <div class="flex flex-wrap items-center justify-between -mx-4 mb-8 pb-6 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-auto px-4 mb-6 sm:mb-0">
                                <h4 class="text-2xl font-bold tracking-wide dark:text-gray-300 text-gray-900 mb-1">Editar Projeto</h4>
                                <p class="text-sm dark:text-gray-300 text-gray-900">dados salvos após clicar em "salvar"</p>
                            </div>
                            <div class="w-full sm:w-auto px-4">
                                <div>
                                    <button type="submit">
                                        <a class="inline-block py-2 px-4 text-xs text-center font-semibold leading-normal text-blue-50 bg-blue-500 hover:bg-blue-600 rounded-lg transition duration-200" >Salvar</a></div>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Número / Nome do projeto</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                                <div class="flex max-w-xl">
                                    <input value="{{$projeto->numero}}" name="numero" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="text" placeholder="Nº do projeto">
                                    <input value="{{$projeto->nome}}" name="nome" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="text" placeholder="Nome">
                                </div>

                            </div>
                        </div>
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Cidade / Estado</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                                <div class="flex max-w-xl">
                                    <input value="{{$projeto->cidade}}" name="cidade" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="text" placeholder="cidade">
                                    <input value="{{$projeto->estado}}" name="estado" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="text" placeholder="estado">
                                </div>

                            </div>
                        </div>
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Cliente (id)</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                                <div class="max-w-xl">
                                    <select name="id_cliente" class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                        @foreach($clientes as $cliente)
                                        <option @if($projeto->id_cliente == $cliente->id) selected @endif  class="text-black" value="{{$cliente->id}}">{{$cliente->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Data de inicio de montagem</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                                <div class="flex max-w-xl">
                                    <input value="{{$projeto->data_inicio_montagem_esperado}}" name="data_inicio_montagem_esperado" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="date" placeholder="Esperado">
                                    <input value="{{$projeto->data_inicio_montagem_real}}" name="data_inicio_montagem_real" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="date" placeholder="Real">
                                </div>

                            </div>
                        </div>
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Custos de montagem</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                                <div class="flex max-w-xl">
                                    <input value="{{$projeto->custo_montagem_esperado}}" name="custo_montagem_esperado" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="number" placeholder="Esperado">
                                    <input value="{{$projeto->custo_montagem_real}}" name="custo_montagem_real" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="number" placeholder="Real">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>


</x-app-layout>
