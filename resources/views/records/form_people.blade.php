<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastros > Pessoas >Novo cadastro') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
    <section class="py-3">
        <div class="container px-4 mx-auto">
            <div class="p-8 dark:bg-gray-800 bg-white rounded-xl">
                <div class="flex flex-wrap items-center justify-between -mx-4 mb-8 pb-6 border-b border-gray-400 border-opacity-20">
                    <div class="w-full sm:w-auto px-4 mb-6 sm:mb-0">
                        <h4 class="text-2xl font-bold tracking-wide dark:text-gray-300 text-gray-900 mb-1">Colaborador</h4>
                        <p class="text-sm dark:text-gray-300 text-gray-900">dados salvos após clicar em "salvar"</p>
                    </div>
                    <div class="w-full sm:w-auto px-4">
                        <div>
                            <!--<a class="inline-block py-2 px-4 mr-3 text-xs text-center font-semibold leading-normal text-gray-400 bg-gray-600 hover:bg-gray-700 rounded-lg transition duration-200" href="#">Cancelar</a>-->
                            <a class="inline-block py-2 px-4 text-xs text-center font-semibold leading-normal text-blue-50 bg-blue-500 hover:bg-blue-600 rounded-lg transition duration-200" href="#">Salvar</a></div>
                    </div>
                </div>
                <form action="">
                    <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                            <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Nome</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="max-w-xl">
                                <div class="flex flex-wrap items-center -mx-3">
                                    <div class="w-full sm:w-1/2 px-3 mb-3 sm:mb-0">
                                        <input required class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" id="formInput1-1" type="text" placeholder="Nome">
                                    </div>
                                    <div class="w-full sm:w-1/2 px-3">
                                        <input required class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" id="formInput1-2" type="text" placeholder="Sobrenome">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                            <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Setor</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="max-w-xl">
                                <input class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" id="formInput1-3" type="text" placeholder="Setor">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                            <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Função</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="max-w-xl">
                                <input class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" id="formInput1-3" type="text" placeholder="Função">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-start -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-5 sm:mb-0">
                            <span class="block mt-2 text-sm font-medium text-black dark:text-gray-100">Observações</span>
                            <span class="text-xs text-black dark:text-gray-400">Digite aqui..</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="max-w-xl"><textarea class="block h-56 py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg resize-none" id="formInput1-9" type="text" placeholder="Lorem ipsum dolor sit amet"></textarea></div>
                        </div>
                    </div>
                </form>
            </div>
         </div>
            </section>
        </div>


</x-app-layout>
