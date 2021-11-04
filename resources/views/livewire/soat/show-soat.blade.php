<div>
	<x-slot name="header">Vista Soats</x-slot>
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
                	{{$soat->empleado->nombre}} {{$soat->empleado->apellido}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                   	Vehiculo
                </p>
                <p>
                	{{$soat->vehicle->placa}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Poliza
                </p>
                <p>
                	{{$soat->poliza}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Codigo aseguradora
                </p>
                <p>
                	{{$soat->codigo_aseguradora}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Clave productor
                </p>
                <p>
                	{{$soat->clave_producto}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Fecha expedicion
                </p>
                <p>
                	{{$soat->fecha_expedicion}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4">
                <p class="text-gray-600 font-bold">
                   	Fecha vencimiento
                </p>
                <p>
                	{{$soat->fecha_vencimiento}}
                </p>
            </div>
        </div>
    </div>
</div>
</div>
