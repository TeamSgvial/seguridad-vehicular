<div>
	<x-slot name="header"></x-slot>
    <form wire:submit.prevent="submit">
        <input type="number" wire:model="departamento_id"><br>
        <input type="number" wire:model="ciudad_id"><br>
        <input type="text" wire:model="direccion"><br>
        <button type="submit">Guardar</button>
    </form>
</div>
