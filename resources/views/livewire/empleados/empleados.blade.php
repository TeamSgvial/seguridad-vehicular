<div class="flex flex-col items-center h-auto pt-6 pb-5"  x-data="{ open: false }">
    <x-slot name="header">Empleados</x-slot>
    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <div class="flex w-full justify-end">
                <button @click="open = true" class="flex flex-row border rounded-md bg-white text-green-500 hover:bg-green-500 hover:text-white p-1 m-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Crear</span>
                </button>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Telefono
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Direccion
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Title
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Status
                  </th>
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @foreach($userlogeado as $user)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?background=random&name={{$user->nombre}}+{{$user->apellido}}" alt="">
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                          {{ $user->nombre}} {{ $user->apellido}}
                        </div>
                        <div class="text-sm text-gray-500">
                          {{ $user->correo}}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $user->telefono }}</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $user->direccion }}</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                    <div class="text-sm text-gray-500">Optimization</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      {{ $user->estado }}
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <button class="text-indigo-600 hover:text-indigo-900" wire:click="edit({{$user->id}})">Edit</button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    {{-- Modal --}}
    <div x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                            <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Registro empleados</h1>
                        </div>
                    </div>
                </h3>
                <div class="mt-2">
                    <div class="flex flex-col w-auto">
                        <form wire:submit.prevent="submit">
                            <div class="flex flex-col pl-8 pr-8 mt-3">
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
                                <button @click="open = false" class="bg-blue-700 rounded-md border-2 mt-3 p-2 font-bold text-white hover:bg-blue-500 w-full">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
              Cancel
            </button>
          </div>
        </div>
      </div>
    </div>
    {{-- End modal --}}
    {{-- UpdateModal --}}
    @if($updateModal)
        @include('livewire.empleados.update')
    @endif
    {{-- /updateModal --}}
</div>