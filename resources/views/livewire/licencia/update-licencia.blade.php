<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-3">
	<x-slot name="header">Actualizacion licencia</x-slot>
  <div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
      <div class="max-w-md mx-auto">
        <div class="flex items-center space-x-5">
          <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
			</svg>
          </div>
          <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
            <h2 class="leading-relaxed">Actualizacion licencia</h2>
            <p class="text-sm text-gray-500 font-normal leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="divide-y divide-gray-200">
          <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
            <div class="flex flex-col" x-data="{ open:true}">
              <label class="leading-loose">Empleado</label>
              <input wire:model="searchEmployees" wire:keydown="searchEmployees()" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Ej: 1234567890" disabled>
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
            <div class="flex flex-col">
              <label class="leading-loose">Categoria</label>
              <select wire:model="categoria_id">
              	<option>Seleccione</option>
	              @foreach($categorias as $categoria)
	              	<option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
	              @endforeach
              </select>
              @error('categoria_id')<span>{{$message}}</span>@enderror
            </div>
            <div class="flex flex-col">
              <label class="leading-loose">Restricciones</label>
              <input wire:model="restricciones" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
              @error('restricciones')<span>{{$message}}</span>@enderror
            </div>
            <div class="flex flex-col">
              <label class="leading-loose">Tipo sangre</label>
              <input wire:model="tipo_sangre" type="textArea" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
              @error('tipo_sangre')<span>{{$message}}</span>@enderror
            </div>
            <div class="flex items-center space-x-4">
              <div class="flex flex-col">
                <label class="leading-loose">Fecha expedicion</label>
                <div class="relative focus-within:text-gray-600 text-gray-400">
                  <input wire:model="fecha_expedicion" type="date" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                </div>
                @error('fecha_expedicion')<span>{{$message}}</span>@enderror
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">Fecha vencimiento</label>
                <div class="relative focus-within:text-gray-600 text-gray-400">
                  <input wire:model="vigencia" type="date" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                </div>
                @error('vigencia')<span>{{$message}}</span>@enderror
              </div>
            </div>
          </div>
          <div class="pt-4 flex items-center space-x-4">
              <button class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
              </button>
              <button wire:click="store()" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
