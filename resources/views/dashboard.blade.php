<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <Br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mx-auto">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                 <div class="lg:w-1/2 max-w-lg" style="margin:auto"> <!-- Adicionamos max-w-lg para limitar a largura máxima da div do gráfico -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <canvas id="myChart1" width="auto" height="auto"></canvas> <!-- Ajustamos o tamanho do gráfico aqui -->
                            <script>
                                var ctx1 = document.getElementById('myChart1').getContext('2d');
                                var data1 = {
                                    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho'],
                                    datasets: [{
                                        label: 'Dados do Gráfico 1',
                                        data: [12, 19, 3, 5, 2, 3, 9],
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

                <div class="lg:w-1/2 max-w-lg"  style="margin:auto"> <!-- Adicionamos max-w-lg para limitar a largura máxima da div do gráfico -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <canvas id="myChart2" width="auto" height="auto"></canvas> <!-- Ajustamos o tamanho do gráfico aqui -->
                            <script>
                                var ctx2 = document.getElementById('myChart2').getContext('2d');
                                var data2 = {
                                    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho'],
                                    datasets: [{
                                        label: 'Dados do Gráfico 2',
                                        data: [12, 19, 3, 5, 2, 3, 9],
                                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        borderWidth: 1
                                    }]
                                };

                                var myChart2 = new Chart(ctx2, {
                                    type: 'bar',
                                    data: data2,
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
            </div>
        </div>








        <!-- DIV 2 INPUT -->
        <!-- linha divisória-->

        <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <canvas id="myChart" width="400" height="400"></canvas>
                    <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var data = {
                            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho'],
                            datasets: [{
                                label: 'Dados do Gráfico',
                                data: [12, 19, 3, 5, 2, 3, 9],
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        };

                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: data,
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
    </div>
</x-app-layout>
