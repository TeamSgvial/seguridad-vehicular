<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-3">
	<x-slot name="header">Creacion tecnicomecanica</x-slot>
  <div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
      <div class="max-w-md mx-auto">
        <div class="flex items-center space-x-5">
          <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
          	<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
			</svg>
          </div>
          <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
            <h2 class="leading-relaxed">Creacion tecnicomecanica</h2>
            <p class="text-sm text-gray-500 font-normal leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="divide-y divide-gray-200">
          <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
            <div class="flex flex-col" x-data="{ open:true}">
              <label class="leading-loose">Empleado</label>
              <input wire:model="searchEmployees" wire:keydown="searchEmployees()" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Ej: 1234567890">
              <ul x-show="open">
              	@forelse($employees as $employee)
              	<button wire:click="dataEmployeed({{$employee}})" x-on:click="{ open = !open }" type="button" class="w-full">
              		<li class="bg-white rounded-sm border">{{$employee->identificacion}} -{{$employee->nombre}} {{$employee->apellido}}</li>
              	</button>
              	@empty
              		@if($employees)
              		<p>No existe el empleado ingresado.</p>
              		@else
              		@endif
              	@endforelse
              </ul>
              @error('searchEmployees')<span>{{$message}}</span>@enderror
            </div>
            <div class="flex flex-col" x-data="{ open:true }">
              <label class="leading-loose">Vehiculo</label>
              <input wire:model="searchVehicles" wire:keydown="searchVehicles()" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Ej: 123HFJ">
              <ul x-show="open">
              	@forelse($vehicles as $vehicle)
              	<button wire:click="dataVehicles({{$vehicle}})" type="button" class="w-full" x-on:click="{open = !open }">
              		<li class="bg-white rounded-sm border">{{$vehicle->placa}}</li>
              	</button>
              	@empty
              		@if($vehicles)
              		<p>No existe la placa ingresada.</p>
              		@else
              		@endif
              	@endforelse
              </ul>
              @error('searchVehicles')<span>{{$message}}</span>@enderror
            </div>
            <div class="flex flex-col" x-data="{ open:true }">
              <label class="leading-loose">Cda</label>
              <select class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
              	@forelse($cda as $cda)
              	<option value="1">{{$cda}}</option>
              	@empty
              	@endforelse
              </select>
            </div>
            <div class="flex flex-col">
              <label class="leading-loose">No control</label>
              <input wire:model="tecnicomecanica.no_control" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="EJ: 1420001202425">
              @error('tecnicomecanica.no_control')<span>{{$message}}</span>@enderror
            </div>
            <div class="flex flex-col">
              <label class="leading-loose">Numero control</label>
              <input wire:model="tecnicomecanica.numero_control" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Ej: AT8945">
              @error('tecnicomecanica.numero_control')<span>{{$message}}</span>@enderror
            </div>
            <div class="flex flex-col">
              <label class="leading-loose">Consecutivo runt</label>
              <input wire:model="tecnicomecanica.consecutivo_runt" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Ej: 14257858">
              @error('tecnicomecanica.consecutivo_runt')<span>{{$message}}</span>@enderror
            </div>
            <div class="flex flex-col">
              <label class="leading-loose">Certificado acreditacion</label>
              <input wire:model="tecnicomecanica.certificado_acreditacion" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Ej: 011-FDFH-1211D-205">
              @error('tecnicomecanica.certificado_acreditacion')<span>{{$message}}</span>@enderror
            </div>
            <div class="flex items-center space-x-4">
              <div class="flex flex-col">
                <label class="leading-loose">Fecha expedicion</label>
                <div class="relative focus-within:text-gray-600 text-gray-400">
                  <input wire:model="tecnicomecanica.fecha_expedicion" type="date" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                </div>
                @error('tecnicomecanica.fecha_expedicion')<span>{{$message}}</span>@enderror
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">Fecha vencimiento</label>
                <div class="relative focus-within:text-gray-600 text-gray-400">
                  <input wire:model="tecnicomecanica.fecha_vencimiento" type="date" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                </div>
                @error('tecnicomecanica.fecha_vencimiento')<span>{{$message}}</span>@enderror
              </div>
            </div>
          </div>
          <div class="pt-4 flex items-center space-x-4">
              <button class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
              </button>
              <button wire:click="create()" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
