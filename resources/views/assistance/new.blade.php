<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Assistências > Nova ') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
        <section class="py-3">
            <div class="container px-4 mx-auto">
                <div class="p-8 dark:bg-gray-800 bg-white rounded-xl">
                    <form method="post" action="{{route('assistance.store')}}">
                        @csrf
                        <div class="flex flex-wrap items-center justify-between -mx-4 mb-8 pb-6 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-auto px-4 mb-6 sm:mb-0">
                                <h4 class="text-2xl font-bold tracking-wide dark:text-gray-300 text-gray-900 mb-1">Nova assistência</h4>
                                <p id="click_me" class="text-sm dark:text-gray-300 text-gray-900">dados salvos após clicar em "salvar"</p>
                            </div>
                            <div class="w-full sm:w-auto px-4">
                                <div>
                                    <button type="submit">
                                        <a class="inline-block py-2 px-4 text-xs text-center font-semibold leading-normal text-blue-50 bg-blue-500 hover:bg-blue-600 rounded-lg transition duration-200" >Salvar</a></div>
                                </button>
                            </div>
                        </div>
                        <!--form-->
                        <!-- DIV 4 INPUT -->
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/4 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Tipo de assistência</span>
                                <select name="tipo_assistencia" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                    <option value="mecanica" class="text-black">Mecânica</option>
                                    <option value="eletrica" class="text-black">Elétrica</option>
                                </select>
                            </div>
                            <div class="w-full sm:w-1/4 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Cliente</span>
                                <select name="id_cliente" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                    <option class=" text-black" value=""></option>
                                    @foreach($clientes as $cliente)
                                        <option class=" text-black" value="{{$cliente->id}}">{{$cliente->nome}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="w-full sm:w-1/4 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Status</span>
                                <select name="status" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                    <option value='aberta' class="text-black">Aberta</option>
                                    <option value='fechada' class="text-black">Finalizada</option>
                                </select>
                            </div>
                            <div class="w-full sm:w-1/4 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Garantia:</span>
                                <select id="garantia" name="garantia" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                    <option class="text-black" value="sim">Sim</option>
                                    <option class="text-black" value="nao" selected>Não</option>
                                </select>
                            </div>
                        </div>

                        <!-- DIV 3 INPUT -->
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Quantidade de horas</span>
                                <input id="quantidade_horas" type="text" name="quantidade_horas" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                            </div>
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Preço da hora</span>
                                <input id="preco_hora" type="text" name="" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                            </div>
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Técnico/Engenheiro</span>
                                <select name="id_pessoas" class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                    <option value="1" class="text-black">abc</option>
                                    <option value="2" class="text-black">dfg</option>
                                </select>
                            </div>
                        </div>
                        <!-- DIV 2 INPUT -->
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/2 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Horário início</span>
                                <input id="horario_inicio" type="text" name="horario_inicio" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                            </div>
                            <div class="w-full sm:w-1/2 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">horário fim</span>
                                <input id="horario_fim" type="text" name="horario_fim" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                            </div>
                        </div>

                        <!-- DIV 2 INPUT -->
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/2 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Data Chamado</span>
                                <input id="data_chamado" type="date" name="data_chamado" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                            </div>
                            <div class="w-full sm:w-1/2 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Data atendimento</span>
                                <input id="data_atendimento" type="date" name="data_atendimento" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                            </div>
                        </div>

                        <!-- DIV 1 INPUT -->
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Projeto</span>
                                <select id="id_projetos" name="id_projetos" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                    <option class=" text-black" value="nenhum">- / -</option>
                                    @foreach($projetos as $projeto)
                                        <option class=" text-black" value="{{$projeto->id}}">{{$projeto->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="flex flex-wrap items-start -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-5 sm:mb-0">
                                <span class="block mt-2 text-sm font-medium text-black dark:text-gray-100">Descrição da assistência</span>
                                <span class="text-xs text-black dark:text-gray-400">...</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                                <div id='desc_ass' class="max-w-xl"><textarea name="descricao" class="block h-56 py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg resize-none"   type="text" placeholder="Digite aqui.."></textarea></div>
                            </div>
                        </div>

                        <!--
                            finish
                        -->



                        <!-- DIV 2 INPUT -->

                    </form>
                </div>
            </div>
        </section>
    </div>


</x-app-layout>
