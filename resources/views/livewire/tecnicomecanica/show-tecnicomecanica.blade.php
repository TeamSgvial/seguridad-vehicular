<div>
	<x-slot name="header">Vista Tecnicomecanica</x-slot>
	<!-- component -->
<!-- This is an example component -->
<div class="flex items-center justify-center px-4 py-6">
    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
        <div class="p-4 border-b">
            <h2 class="text-2xl ">
                Informacion detallada.
            </h2>
            <p class="text-sm text-gray-500">
                Detalles y caracteristicas.
            </p>
        </div>
        <div class="grid grid-cols-2">
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Propietario
                </p>
                <p>
                	{{$tecnicomecanica->empleado->nombre}} {{$tecnicomecanica->empleado->apellido}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                   	Vehiculo
                </p>
                <p>
                	{{$tecnicomecanica->vehiculo->placa}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    No Control
                </p>
                <p>
                	{{$tecnicomecanica->no_control}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Numero Control
                </p>
                <p>
                	{{$tecnicomecanica->numero_control}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Consecutivo Runt
                </p>
                <p>
                	{{$tecnicomecanica->consecutivo_runt}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Fecha expedicion
                </p>
                <p>
                	{{$tecnicomecanica->fecha_expedicion}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4">
                <p class="text-gray-600 font-bold">
                   	Fecha vencimiento
                </p>
                <p>
                	{{$tecnicomecanica->fecha_vencimiento}}
                </p>
            </div>
        </div>
    </div>
</div>
</div>
