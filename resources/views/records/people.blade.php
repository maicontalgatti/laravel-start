<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastros > Pessoas') }}
        </h2>
    </x-slot>





    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Badge</span>-->
                    <div class="mt-6" style="margin-top: 0px!important">
                        <a href="{{route('people.add') }}"  class="flex items-center justify-center rounded-md border border-transparent  px-6 py-3 text-base font-medium text-white shadow-sm ">
                            <button  type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                     style="padding: 10px 50px;">
                                Cadastrar nova Pessoa
                            </button>
                        </a>
                    </div>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100 dark:bg-gray-700 bg-gray-100 rounded-lg">
                    <div class="flex flex-col sm:flex-row">
                        <div class="w-full sm:w-2/6 mb-2 sm:mb-0 text-blue-500 font-semibold">Nome</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">Setor</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">Função</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">Observação</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0"></div>
                        <div class="w-full sm:w-1/6"></div>
                    </div>
                </div>
            </div>
        </div>

        @foreach($pessoas as $pessoa)

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm my-2 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex flex-col sm:flex-row">

                            <div class="w-full sm:w-2/6 mb-2 sm:mb-0 text-blue-500 font-semibold">{{$pessoa->setor}}</div>
                            <div class="w-full sm:w-1/6 mb-2 sm:mb-0">{{$pessoa->funcao}}</div>
                            <div class="w-full sm:w-1/6 mb-2 sm:mb-0">{{$pessoa->nome}}</div>
                            <div class="w-full sm:w-1/6 mb-2 sm:mb-0">{{$pessoa->observacao}}</div>
                            <div class="w-full sm:w-1/6 mb-2 sm:mb-0"></div>
                            <div class="w-full sm:w-1/6 mb-2 sm:mb-0">
                                <a href="{{route('people.edit', $pessoa->id)}}" class="block w-full rounded-md border border-transparent px-6 py-3 text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-800">
                                    Editar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


</x-app-layout>
