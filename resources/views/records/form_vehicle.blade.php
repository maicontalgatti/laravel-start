<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastros > Veiculos >Novo cadastro') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
    <section class="py-3">
        <div class="container px-4 mx-auto">
            <div class="p-8 dark:bg-gray-800 bg-white rounded-xl">
                <form method="post" action="{{route('vehicle.store')}}">
                    @csrf
                    <div class="flex flex-wrap items-center justify-between -mx-4 mb-8 pb-6 border-b border-gray-400 border-opacity-20">
                    <div class="w-full sm:w-auto px-4 mb-6 sm:mb-0">
                        <h4 class="text-2xl font-bold tracking-wide dark:text-gray-300 text-gray-900 mb-1">Veiculo</h4>
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
                            <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Marca / modelo</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                                <div class="flex max-w-xl">
                                        <input name="marca" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="text" placeholder="Marca">
                                        <input name="modelo" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="text" placeholder="Modelo">
                                </div>

                            </div>
                    </div>
                    <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                            <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Placa</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="max-w-xl">
                                <input name="placa" class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg"   type="text" placeholder="Placa">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                            <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Kilometragem na aquisição e atual</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="flex max-w-xl">
                                <input name="km_aquisicao" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="number" placeholder="Aquisição">
                                <input name="km_atual" class=" w-2/4 py-4 px-3 text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" type="number" placeholder="Atual">
                            </div>

                        </div>
                    </div>
                    <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                            <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Período de troca de óleo (kilometros)</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="max-w-xl">
                                <input name="per_troca_oleo_km" class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg"  type="text" placeholder="Pedíodo de troca">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                            <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Última troca de óleo (kilometros)</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="max-w-xl">
                                <input name="ultima_troca_oleo_km" class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg"  type="text" placeholder="Ultima troca">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
         </div>
            </section>
        </div>


</x-app-layout>
