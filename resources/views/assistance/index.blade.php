<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Assistência') }}
        </h2>
    </x-slot>

    ['tipo_assistencia','status','garantia','quantidade_horas','horario_inicio','horario_fim','data_chamado','data_atendimento','descricao','id_cliente','id_pessoas','id_projetos']
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


                <div class="p-6 text-gray-900 dark:text-gray-100 dark:bg-gray-700 bg-gray-100 rounded-lg">
                    <div class="flex ">
                        <div class="w-2/6 ">Marca - Modelo</div>
                        <div class="w-1/6 ">Placa</div>
                        <div class="w-1/6 ">Quilometragem atual</div>
                        <div class="w-1/6 ">Ultima troca de óleo</div>
                        <div class="w-1/6 "></div>
                    </div>
                </div>
            </div>
        </div>


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-top: 5px">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex ">
                            <div class="w-2/6"> </div>
                            <div class="w-1/6"> </div>
                            <div class="w-1/6">Km  </div>
                            <div class="w-1/6">Km  </div>
                            <div class="w-1/6 ">
                                <a href=" "  class="flex items-center justify-center rounded-md border border-transparent text-base font-medium text-white shadow-sm ">
                                    <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                        Editar
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</x-app-layout>
