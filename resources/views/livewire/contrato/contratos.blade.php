<div>
    <x-slot name="header"></x-slot>
    <form wire:submit.prevent="submit">
        <input type="number" wire:model="empleado_id"><br>
        <input type="number" wire:model="contrato_id"><br>
        <input type="number" wire:model="eps_id"><br>
        <input type="number" wire:model="arl_id"><br>
        <input type="number" wire:model="afp_id"><br>
        <input type="number" wire:model="cesantia_id"><br>
        <input type="text" wire:model="codigo" placeholder="Codigo de contrato"><br>
        <input type="date" wire:model="fechaIngreso"><br>
        <input type="date" wire:model="fechaEgreso"><br>
        <input type="number" wire:model="no_personas"><br>
        <input type="text" wire:model="profesion"><br>
        <input type="text" wire:model="cargo"><br>
        <input type="text" wire:model="educacion"><br>
        <input type="number" wire:model="salario"><br>
        <button type="submit">Guardar</button>
    </form>
</div>
