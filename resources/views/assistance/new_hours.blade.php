<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Assistências > Nova ') }}

        </h2>


    </x-slot>
    <div class="max-w-12xl mx-auto sm:px-6 lg:px-6">
        <section class="py-3">
            <div class="container px-5 mx-auto">
                <div class="p-8 dark:bg-gray-800 bg-white rounded-xl">
                    <form method="post" action="{{route('assistance.store')}}">
                        <input type="hidden" name="idParam" value="{{ $idParam }}">
                        <!-- DIV 1 INPUT -->
                        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full px-4 mb-4 sm:mb-0">
                                <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Tecnico</span>
                                <!--<select name="id_pessoas" class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg">-->
                                <select class="js-example-basic-multiple block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" name="states[]" multiple="multiple">
                                    @foreach($pessoas as $pessoa)
                                        <option class=" text-black" value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- DIV 1 INPUT -->

                        <!--DIV QUE VOU COLOCAR OS NOMES-->
                        <div class="flex flex-wrap items-center -mx-4 pb-0 mb-8 bg-gray-200 dark:bg-gray-700" id="abdfeg">

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
                            .dia-fim-de-semana {
                                color: red;
                            }


                        </style>

                    </form>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>
