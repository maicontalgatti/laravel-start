<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Assistências > Nova ') }}
        </h2>     <!-- Select2 -->
    </x-slot>
    <div class="max-w-12xl mx-auto sm:px-6 lg:px-6">
        <section class="py-3">
            <div class="container px-5 mx-auto">
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
                                        <a class="inline-block py-2 px-4 text-xs text-center font-semibold leading-normal text-blue-50 bg-blue-500 hover:bg-blue-600 rounded-lg transition duration-200" >Adicionar horários</a></div>
                                </button>
                            </div>
                        </div>
                        <!--form-->
                        <!-- DIV 2 INPUT -->
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/2 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Titulo</span>
                                <input id="titulo" type="text" name="titulo" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                            </div>
                            <div class="w-full sm:w-1/2 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Porcentagem de concluído</span>
                                <div class="flex items-center">
                                    <input value="0" id="percentage" type="number" name="percentage" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-l-lg">
                                    <span class="py-4 px-3 bg-gray-200 text-gray-900 font-medium rounded-r-lg">%</span>
                                </div>
                            </div>
                        </div>
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
                                <select name="id_cliente" id="id_cliente" class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                    <option class=" text-black" value=""></option>
                                    @foreach($clientes as $cliente)
                                        <option class=" text-black" value="{{$cliente->cd_empresa}}">{{$cliente->nome_completo}}</option>
                                    @endforeach
                                </select>
                                <!--</select>-->
                            </div>
                            <div class="w-full sm:w-1/4 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Status</span>
                                <select name="status" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                    <option value='Aberta' class="text-black">Aberta</option>
                                    <option value='Fechada' class="text-black">Finalizada</option>
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
                        <!-- DIV 4 INPUT -->
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">

                            <div class="w-full sm:w-1/4 px-4 mb-4 sm:mb-0">

                            </div>
                            <div class="w-full sm:w-1/4 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Data chamado</span>
                                <div class="flex items-center">
                                    <input value="0" id="data_chamado" type="date" name="data_chamado" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-l-lg">
                                </div>
                            </div>
                            <div class="w-full sm:w-1/4 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Data atendimento</span>
                                <div class="flex items-center">
                                    <input value="0" id="data_atendimento" type="date" name="data_atendimento" class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-l-lg">
                                </div>
                            </div>
                            <div class="w-full sm:w-1/4 px-4 mb-4 sm:mb-0">

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
                        <style>
                            @media (max-width: 640px) {
                                .responsive-hide {
                                    display: none;
                                }
                            }
                            .texto-vermelho{
                                color: red;
                            }

                        </style>

                    </form>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>
