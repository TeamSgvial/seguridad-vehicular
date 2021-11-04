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
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                  </div>
                </div>
                <div class="flex justify-center">
                    <div class="flex">
                        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Actualizacion Soat</h1>
                    </div>
                </div>
            </h3>
            <div class="mt-2">
                <div class="flex flex-col">
                    <form wire:submit.prevent="update">
                        <div class="flex flex-col pl-8 pr-8 mt-3">
                            <label class="flex flex-col font-bold">Empleado</label>
                            <input class="flex flex-col focus:outline-none rounded-lg border-2" type="text" wire:model="empleado" disabled>
                            @error('soat.empleado_id')<span>{{ $message }}</span>@enderror
                        </div>
                        <div class="flex flex-col pl-8 pr-8 mt-3" x-data="{ open: false}">
                            <label class="flex flex-col font-bold">Vehiculo</label>
                            <input class="flex flex-col focus:outline-none rounded-lg border-2" type="text" wire:model="vehiculo" disabled>
                            @error('soat.vehiculo_id')<span>{{ $message }}</span>@enderror
                        </div>
                        <div class="flex flex-col pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Ciudad</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="soat.ciudad_id">
                                @error('soat.ciudad_id')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Poliza</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="soat.poliza">
                                @error('soat.poliza')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Codigo aseguradora</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="soat.codigo_aseguradora">
                                @error('soat.codigo_aseguradora')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Clave productor</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="text" wire:model="soat.clave_producto">
                                @error('soat.clave_producto')<span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-col-2 gap-4 pl-8 pr-8 mt-3">
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Fecha expedicion</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="date" wire:model="soat.fecha_expedicion" disabled>
                                @error('soat.fecha_expedicion')<span>{{ $message }}</span>@enderror
                            </div>
                            <div class="grid grid-cols-1 w-full">
                                <label class="flex flex-col font-bold">Fecha vencimiento</label>
                                <input class="flex flex-auto focus:outline-none rounded-lg border-2" type="date" wire:model="soat.fecha_vencimiento" disabled>
                                @error('soat.fecha_vencimiento')<span>{{ $message }}</span>@enderror
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
        <button wire:click="closeModal" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>