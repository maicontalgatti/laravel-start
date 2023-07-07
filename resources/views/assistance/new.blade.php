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
                    <form method="post" action="">
                        @csrf
                        <div class="flex flex-wrap items-center justify-between -mx-4 mb-8 pb-6 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-auto px-4 mb-6 sm:mb-0">
                                <h4 class="text-2xl font-bold tracking-wide dark:text-gray-300 text-gray-900 mb-1">Nova assistência</h4>
                                <p class="text-sm dark:text-gray-300 text-gray-900">dados salvos após clicar em "salvar"</p>
                            </div>
                            <div class="w-full sm:w-auto px-4">
                                <div>
                                    <button type="submit">
                                        <a class="inline-block py-2 px-4 text-xs text-center font-semibold leading-normal text-blue-50 bg-blue-500 hover:bg-blue-600 rounded-lg transition duration-200" >Salvar</a></div>
                                </button>
                            </div>
                        </div>
                        <!--form-->

                        <div class="flex flex-wrap bg-gray-200">
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/4 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2" style="padding-right: 2px; padding-left: 2px">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Tipo de assistência</span>
                                <select name="id_cliente" class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                    <option class="text-black">Mecânica</option>
                                    <option class="text-black">Elétrica</option>
                                </select></div>
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/4 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2" style="padding-right: 2px; padding-left: 2px">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Cliente</span>
                                <input name="marca" class="w-full py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="text" placeholder="Marca">
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/4 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2" style="padding-right: 2px; padding-left: 2px">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Status</span>
                                <select name="id_cliente" class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                    <option class="text-black">Iniciada</option>
                                    <option class="text-black">Terminada</option>
                                </select>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/4 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2" style="padding-right: 2px; padding-left: 2px">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Garantia?</span>
                                <select name="id_cliente" class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">
                                    <option class="text-black">Sim</option>
                                    <option class="text-black">Não</option>
                                </select>
                            </div>
                        </div>


                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Função</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                                <div class="max-w-xl">
                                    <input name="funcao" class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg"  type="text" placeholder="Função">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-start -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-5 sm:mb-0">
                                <span class="block mt-2 text-sm font-medium text-black dark:text-gray-100">Observações</span>
                                <span class="text-xs text-black dark:text-gray-400">...</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                                <div class="max-w-xl"><textarea name="observacao" class="block h-56 py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg resize-none"   type="text" placeholder="Digite aqui.."></textarea></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>


</x-app-layout>
