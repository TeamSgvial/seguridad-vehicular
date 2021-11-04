<div>
	<x-slot name="header">Vista vehiculos</x-slot>
	<!-- component -->
<!-- This is an example component -->
<div class="flex items-center justify-center px-4 py-6">
    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
		<div class="flex-shrink-0 h-80 w-full">
			<img class="h-80 w-full" src="{{ asset('fotos-vehiculos/'. $vehiculo->fotografia)}}">
		</div>
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
                    {{$vehiculo->propietario->nombre}} {{$vehiculo->propietario->apellido}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                   	Clase vehiculo
                </p>
                <p>
                	{{$vehiculo->clase_vehiculo}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Placa
                </p>
                <p>
                    {{$vehiculo->placa}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Marca - Linea - Modelo
                </p>
                <p>
                    {{$vehiculo->marca}}, {{$vehiculo->linea}}, {{$vehiculo->modelo}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Cilindraje
                </p>
                <p>
                    {{$vehiculo->cilindrada}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                    Color
                </p>
                <p>
                    {{$vehiculo->color}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-bold">
                   	Servicio
                </p>
                <p>
                	{{$vehiculo->servicio}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4">
                <p class="text-gray-600 font-bold">
                   	Numero motor
                </p>
                <p>
                	{{$vehiculo->no_motor}}
                </p>
            </div>
        </div>
    </div>
</div>
</div>
