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
                        <div class="flex ">
                            <div class="w-2/6">{{$assistencia->descricao}}</div>
                                <?php
                                if($assistencia->status == "Aberto"){
                                        echo "<div style='color:red' class='w-1/6'>".$assistencia->status."</div>";
                                    }else{
                                        echo "<div style='color:green' class='w-1/6'>".$assistencia->status."</div>";
                                    };
                                ?>
                                <div class="w-1/6">{{$assistencia->tipo_assistencia}}</div>
                                <div class="w-1/6">{{$assistencia->id_cliente}}</div>
                                <div class="w-1/6">
                                        <?php echo date("d-m-Y", strtotime($assistencia->data_chamado)); ?>
                                </div>

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

        @endforeach
    </div>
</x-app-layout>
