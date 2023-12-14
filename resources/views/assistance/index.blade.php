<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Assistência') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 dark:bg-gray-700 bg-gray-100 rounded-lg">
                    <div class="flex flex-col sm:flex-row">
                        <div class="w-full sm:w-2/6 mb-2 sm:mb-0 text-blue-500 font-semibold">Assistência</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">Status</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">Tipo de Assistência</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">Cliente</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">Abertura do Chamado</div>
                        <div class="w-full sm:w-1/6"></div>
                    </div>
                </div>
            </div>
        </div>

        @foreach($assistencias as $assistencia)

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm my-2 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col sm:flex-row">
                        <div class="w-full sm:w-2/6 mb-2 sm:mb-0 text-blue-500 font-semibold">{{$assistencia->titulo}}</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0
                            @if($assistencia->status === 'Fechada')
                                text-green-500
                            @elseif($assistencia->status === 'Aberta')
                                text-red-500
                            @endif">
                            {{$assistencia->status}} - {{$assistencia->percentage}} %
                        </div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">{{$assistencia->tipo_assistencia}}</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">{{$assistencia->cliente->nome_completo}}</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">{{$assistencia->data_chamado}}</div>
                        <div class="w-full sm:w-1/6 mb-2 sm:mb-0">
                            <a href="{{route('assistance.edit', $assistencia->id)}}" class="block w-full rounded-md border border-transparent px-6 py-3 text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-800">
                                Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Adicione a biblioteca Font Awesome para o ícone de seta -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

        <style>
            @media (max-width: 767px) {
                .extra-info.d-none {
                    display: none;
                }

                .show-more {
                    display: block;
                }
            }
        </style>

        <script>
            function toggleExtraInfo(showMoreElement) {
                var extraInfo = showMoreElement.parentElement.parentElement.querySelector('.extra-info');
                if (extraInfo.style.display === 'none' || extraInfo.style.display === '') {
                    extraInfo.style.display = 'block';
                } else {
                    extraInfo.style.display = 'none';
                }
            }
        </script>


    </div>
</x-app-layout>
