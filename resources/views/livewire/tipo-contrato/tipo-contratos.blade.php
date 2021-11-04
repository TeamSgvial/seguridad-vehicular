<div>
	<x-slot name="header"></x-slot>
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="nombre" placeholder="Tipo contrato"><br>
        <button type="submit">Guardar</button>
    </form>
</div>
