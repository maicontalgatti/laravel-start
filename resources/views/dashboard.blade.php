<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </x-slot>

    <div class="py-12">

       <!-- <div class="container px-4 mx-auto">
            <div class="p-8 dark:bg-gray-800 bg-white rounded-xl">

                <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                    <div class="w-full sm:w-1/2 px-4 mb-4 sm:mb-0">
                        <p>Assistências em aberto:\App\Models\assistencia::contarAssistenciasAbertas()}}</p>
                    </div>
                    <div class="w-full sm:w-1/2 px-4 mb-4 sm:mb-0">
                        <p>Assistências em aberto:\App\Models\assistencia::contarAssistenciasAbertas()}}</p>
                    </div>
                </div>
            </div>
        </div>-->

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mx-auto">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">

                <div class="lg:w-1/3 max-w-lg w-100" style="margin:auto; max-width: 300px;"> <!-- Limita o tamanho do gráfico em telas pequenas -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <canvas id="myChart1" width="200" height="200"></canvas> <!-- Ajusta o tamanho do gráfico aqui -->
                            <script>
                                var ctx1 = document.getElementById('myChart1').getContext('2d');
                                var quantidadeEletrica = {{ \App\Models\assistencia::contarAssistenciasTipoMecanica() }};
                                var quantidadeMecanica = {{ \App\Models\assistencia::contarAssistenciasTipoEletrica() }};
                                var data1 = {
                                    labels: ['Elétrica', 'Mecânica'],
                                    datasets: [{
                                        label: 'Quantidade de assistencias',
                                        data: [quantidadeEletrica,quantidadeMecanica],
                                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        borderWidth: 1
                                    }]
                                };

                                var myChart1 = new Chart(ctx1, {
                                    type: 'bar',
                                    data: data1,
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
<br>
                <div class="lg:w-1/3 max-w-lg w-100" style="margin:auto; max-width: 300px;"> <!-- Limita o tamanho do gráfico em telas pequenas -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <canvas id="myChart2" width="200" height="200"></canvas> <!-- Ajusta o tamanho do gráfico aqui -->
                            <script>
                                var ctx2 = document.getElementById('myChart2').getContext('2d');
                                var quantidadeEletrica = {{ \App\Models\Assistencia::contarAssistenciasTipoMecanica() }};
                                var quantidadeMecanica = {{ \App\Models\Assistencia::contarAssistenciasTipoEletrica() }};
                                var data2 = {
                                    labels: ['Elétrica', 'Mecânica'],
                                    datasets: [{
                                        label: 'Quantidade de assistencias',
                                        data: [quantidadeEletrica, quantidadeMecanica],
                                        backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                                        borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                                        borderWidth: 1
                                    }]
                                };

                                var myChart2 = new Chart(ctx2, {
                                    type: 'pie', // Altera o tipo de gráfico para pizza
                                    data: data2,
                                    options: {
                                        // Você pode adicionar opções específicas do gráfico de pizza aqui, se necessário
                                    }
                                });

                            </script>
                        </div>
                    </div>
                </div>
<br>
                <div class="lg:w-1/3 max-w-lg w-100" style="margin:auto; max-width: 300px;"> <!-- Limita o tamanho do gráfico em telas pequenas -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <canvas id="myChart3" width="200" height="200"></canvas> <!-- Ajusta o tamanho do gráfico aqui -->
                            <script>
                                var ctx3 = document.getElementById('myChart3').getContext('2d');
                                var semGarantia = {{ \App\Models\Assistencia::contarAssistenciasSemGarantia() }};
                                var comGarantia = {{ \App\Models\Assistencia::contarAssistenciascomGarantia() }};
                                var data3= {
                                    labels: ['Sem garantia', 'Garantia'],
                                    datasets: [{
                                        label: 'Quantidade de assistencias',
                                        data: [semGarantia, comGarantia],
                                        backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                                        borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                                        borderWidth: 1
                                    }]
                                };

                                var myChart3 = new Chart(ctx3, {
                                    type: 'pie', // Altera o tipo de gráfico para pizza
                                    data: data3,
                                    options: {
                                        // Você pode adicionar opções específicas do gráfico de pizza aqui, se necessário
                                    }
                                });

                            </script>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- DIV 2 INPUT -->
        <!-- linha divisória-->
        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
        </div>

    </div>
</x-app-layout>
