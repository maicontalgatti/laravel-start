<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastros > Clientes') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100 dark:bg-gray-700 bg-gray-100 rounded-lg">
                    <div class="flex flex-col sm:flex-row">
                        <div class="w-full sm:w-2/6 mb-2 sm:mb-0 text-blue-500 font-semibold">Nome</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0"></div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">Endereço</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0"> </div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">UF</div>
                        <div class="w-full sm:w-1/6">Fone</div>


                    </div>
                </div>
            </div>
        </div>

        @foreach($clientes as $cliente)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm my-2 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex flex-col sm:flex-row">
                            <div class="w-full sm:w-2/6 mb-2 sm:mb-0 text-blue-500 font-semibold">{{$cliente->nome_completo}}</div>
                            <div class="w-full sm:w-1/6 mb-2 sm:mb-0"> </div>
                            <div class="w-full sm:w-1/6 mb-2 sm:mb-0">{{$cliente->municipio}} </div>
                            <div class="w-full sm:w-1/6 mb-2 sm:mb-0"> </div>
                            <div class="w-full sm:w-1/6 mb-2 sm:mb-0">{{$cliente->uf}}</div>
                            <div class="w-full sm:w-1/6 mb-2 sm:mb-0">{{$cliente->fone}}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
