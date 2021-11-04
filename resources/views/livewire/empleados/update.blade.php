<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                <div class="flex justify-center py-4">
                  <div class="flex bg-blue-200 rounded-full md:p-4 p-2 border-2 border-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                </div>
                <div class="flex justify-center">
                    <div class="flex">
                        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Actualiza empleado</h1>
                    </div>
                </div>
            </h3>
            <div class="mt-2">
                <div class="flex flex-col w-auto">
                        <div class="flex flex-col pl-8 pr-8 mt-3">
                            <input type="hidden" wire:model="empleado.id">
                            <label class="flex flex-col font-bold">Identificacion</label>
                            <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="empleado.identificacion">
                            @error('empleado.identificacion')<span>{{ $message }}</span>@enderror
                        </div>
                        <div class="flex flex-col-2 gap-5 mt-3 pl-8 pr-8">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold mt-3">Nombre</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="empleado.nombre">
                                @error('empleado.nombre')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold mt-3">Apellido</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="empleado.apellido">
                                @error('empleado.apellido')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col pl-8 pr-8">
                            <label class="flex flex-col font-bold mt-3">Telefono</label>
                            <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="empleado.telefono">
                            @error('empleado.telefono')<span>{{ $message }}</span>@enderror
                        </div>
                        <div class="flex flex-col pl-8 pr-8">
                            <label class="flex flex-col font-bold mt-3">Direccion</label>
                            <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="empleado.direccion">
                            @error('empleado.direccion')<span>{{ $message }}</span>@enderror
                        </div>
                        <div class="flex flex-col pl-8 pr-8">
                            <label class="flex flex-col font-bold mt-3">Correo</label>
                            <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="email" wire:model="empleado.correo">
                            @error('empleado.correo')<span>{{ $message }}</span>@enderror
                        </div>
                        <div class="flex flex-col pl-8 pr-8">
                            <label class="flex flex-col font-bold mt-3">Estado</label>
                            <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="empleado.estado">
                            @error('empleado.estado')<span>{{ $message }}</span>@enderror
                        </div>
                        <div class="flex flex-col pl-8 pr-8">
                            <button wire:click="store()" class="bg-blue-700 rounded-md border-2 mt-3 p-2 font-bold text-white hover:bg-blue-500 w-full">Guardar</button>
                        </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button wire:click="store()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>