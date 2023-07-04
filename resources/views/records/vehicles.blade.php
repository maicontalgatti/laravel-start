<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastros > Veiculos') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Badge</span>-->
                    <div class="mt-6" style="margin-top: 0px!important">
                        <a href="{{route('vehicle.add') }}"  class="flex items-center justify-center rounded-md border border-transparent  px-6 py-3 text-base font-medium text-white shadow-sm ">
                            <button  type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                     style="padding: 10px 50px;">
                                Cadastrar novo veiculo
                            </button>
                        </a>
                    </div>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100 dark:bg-gray-700 bg-gray-100 rounded-lg">
                    <div class="flex ">
                        <div class="w-2/5 ">Marca - Modelo</div>
                        <div class="w-1/5 ">Placa</div>
                        <div class="w-1/5 ">Quilometragem atual</div>
                        <div class="w-1/5 ">Ultima troca de óleo</div>
                    </div>
                </div>
            </div>
        </div>

        @foreach($veiculos as $veiculo)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-top: 5px">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex ">
                            <div class="w-2/5">{{$veiculo->marca}} {{$veiculo->modelo}}</div>
                            <div class="w-1/5">{{$veiculo->placa}}</div>
                            <div class="w-1/5">Km {{$veiculo->km_atual}}</div>
                            <div class="w-1/5">Km {{$veiculo->ultima_troca_oleo_km}}</div>
                        </div>
                        <!--<div class="p-6 text-gray-900 dark:text-gray-100">
                        </div>-->
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</x-app-layout>
