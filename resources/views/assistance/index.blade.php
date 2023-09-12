<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Assistência') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


                <div class="p-6 text-gray-900 dark:text-gray-100 dark:bg-gray-700 bg-gray-100 rounded-lg">
                    <div class="flex ">
                        <div class="w-2/6 ">Assistência</div>
                        <div class="w-1/6 ">Status</div>
                        <div class="w-1/6 ">Tipo de assistencia</div>
                        <div class="w-1/6 ">Cliente</div>
                        <div class="w-1/6 ">Abertura do chamado</div>
                        <div class="w-1/6 "></div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($assistencias as $assistencia)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-top: 5px">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="row">
                            <!-- Coluna 1: Descrição da Assistência -->
                            <div class="col-md-4 col-12">
                                {{$assistencia->descricao}}
                            </div>

                            <!-- Coluna 2: Status -->
                            <div class="col-md-4 col-12">
                                {{$assistencia->status}}
                            </div>

                            <!-- Coluna 3: Botão de Mostrar Informações (Visível apenas em dispositivos móveis) -->
                            <div class="col-md-4 col-12 text-center d-md-none">
                        <span class="show-more" onclick="toggleExtraInfo(this)">
                            Mostrar Mais <i class="fas fa-chevron-down"></i>
                        </span>
                            </div>
                        </div>

                        <!-- Mostrar informações adicionais quando clicado (Visível apenas em dispositivos móveis) -->
                        <div class="extra-info d-md-none" style="display: none;">
                            <!-- Coloque aqui as informações adicionais -->
                            {{$assistencia->tipo_assistencia}}
                            {{$assistencia->cliente->nome}}
                                <?php echo date("d-m-Y", strtotime($assistencia->data_chamado)); ?>
                            <a href="#" class="edit-button">Editar</a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

        <!-- Adicione a biblioteca Font Awesome para o ícone de seta -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

        <script>
            function toggleExtraInfo(showMoreElement) {
                var extraInfo = showMoreElement.parentElement.parentElement.parentElement.querySelector('.extra-info');
                if (extraInfo.style.display === 'none' || extraInfo.style.display === '') {
                    extraInfo.style.display = 'block';
                } else {
                    extraInfo.style.display = 'none';
                }
            }
        </script>


    </div>
</x-app-layout>
