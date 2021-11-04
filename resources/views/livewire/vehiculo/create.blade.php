<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                <div class="flex justify-center py-4">
                  <div class="flex bg-blue-200 rounded-full md:p-4 p-2 border-2 border-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                    </svg>
                  </div>
                </div>
                <div class="flex justify-center">
                    <div class="flex">
                        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Creacion vehiculo</h1>
                    </div>
                </div>
            </h3>
            <div class="mt-2">
                <div class="flex flex-col">
                    <form wire:submit.prevent="saveVehiculo" enctype="multipart/form-data">
                        <div class="flex flex-col pl-8 pr-8 mt-3">
                            <label class="flex flex-col font-bold">Tipo vehiculo</label>
                            <select class="flex flex-auto focus:outline-none rounded-lg border-2" wire:model="vehiculo.tipo_vehiculo">
                                <option>Seleccione</option>
                                <option value="Carro">Carro</option>
                                <option value="Moto">Moto</option>
                                <option value="Camion">Camion</option>
                                <option value="Cicla">Cicla</option>
                                <option value="Tractor">Tractor</option>
                            </select>
                            @error('vehiculo.tipo_vehiculo')<span>{{ $message }}</span>@enderror
                        </div>
                        <div class="flex flex-col pl-8 pr-8 mt-3" x-data="{ open: false}">
                            <label class="flex flex-col font-bold">Empleado</label>
                            <input class="flex flex-col focus:outline-none rounded-lg border-2" type="search" wire:model="search" wire:keydown="search()" @click="{ open = !open }" placeholder="Buscar empleado">
                            <ul x-show="open">@forelse($datos as $dato)<button class="w-full" @click="{ open = !open }">
                                <li class="bg-white rounded-sm border" wire:click="empleado({{ $dato->identificacion }},{{$dato->id}})">{{$dato->nombre}}->{{ $dato->identificacion }}</li>
                            </button>  @empty @endforelse</ul>
                        </div>
                        <div class="flex flex-col-3 gap-4 pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Placa</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.placa" placeholder="Placa vehiculo">
                                @error('vehiculo.placa')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Marca</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.marca" placeholder="Marca">
                                @error('vehiculo.marca')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Linea</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.linea" placeholder="Linea">
                                @error('vehiculo.linea')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col-3 gap-4 pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Modelo</label>
                                <input class="flex flex-auto focus:outline-none rounder-lg border-2" type="number" wire:model="vehiculo.modelo" placeholder="Modelo">
                                @error('vehiculo.modelo')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Cilidraje</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="number" wire:model="vehiculo.cilindrada" placeholder="Cilindraje">
                                @error('vehiculo.cilindrada')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Color</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.color" placeholder="Color">
                                @error('vehiculo.color')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col-3 gap-4 pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Servicio</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.servicio" placeholder="Servicio">
                                @error('vehiculo.servicio')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Clase vehiculo</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.clase_vehiculo" placeholder="Clase vehiculo">
                                @error('vehiculo.clase_vehiculo')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Tipo carroceria</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.tipo_carroceria" placeholder="Carroceria">
                                @error('vehiculo.tipo_carroceria')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col-3 gap-4 pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Combustible</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.combustible" placeholder="Combustible">
                                @error('vehiculo.combustible')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Capacidad</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="number" wire:model="vehiculo.capacidad" placeholder="Capacidad vehiculo">
                                @error('vehiculo.capacidad')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold"># Motor</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.no_motor" placeholder="Numero motor">
                                @error('vehiculo.no_motor')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col-3 gap-4 pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold"># Vin</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.no_vin" placeholder="Numero VIN">
                                @error('vehiculo.no_vin')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold"># Serie</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.no_serie" placeholder="Numero serie">
                                @error('vehiculo.no_serie')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Chasis</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.chasis" placeholder="Chasis">
                                @error('vehiculo.chasis')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col-3 gap-4 pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Blindaje</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo.blindaje" placeholder="Blindaje">
                                @error('vehiculo.blindaje')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Potencia</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="number" wire:model="vehiculo.potencia" placeholder="Potencia">
                                @error('vehiculo.potencia')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Puertas</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="number" wire:model="vehiculo.puertas" placeholder="Puertas">
                                @error('vehiculo.puertas')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col-2 pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Fecha matricula</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="date" wire:model="vehiculo.fecha_matricula">
                                @error('vehiculo.fecha_matricula')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Fecha vencimiento</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="date" wire:model="vehiculo.fecha_vencimiento">
                                @error('vehiculo.fecha_vencimiento')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 mt-5 mx-7">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Foto</label>
                                <div class='flex items-center justify-center w-full'>
                                    <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                        <div class='flex flex-col items-center justify-center pt-7'>
                                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                            <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Select a photo</p>
                                        </div>
                                        <input type="file" class="hidden" wire:model="foto" />
                                        @error('foto')<span>{{ $message }}</span>@enderror
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <button class="bg-blue-700 rounded-md border-2 mt-3 p-2 font-bold text-white hover:bg-blue-500 w-full" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button wire:click="open()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>