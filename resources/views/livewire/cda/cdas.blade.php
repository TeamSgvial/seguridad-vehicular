<div>
    <x-slot name="header"></x-slot>
    <form wire:submit.prevent="submit">
        <label>NIT</label>
        <input type="text" wire:model="nit">
        @error('nit')<span>{{ $message }}</span>@enderror<br>
        <label>Nombre</label>
        <input type="text" wire:model="nombre">
        @error('nombre')<span>{{ $message }}</span>@enderror<br>
        <button type="submit">Guardar</button>
    </form>
</div>
