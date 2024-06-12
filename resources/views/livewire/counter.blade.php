<div>
    <div class="container mt-5">
        <button type="button" class="btn btn-primary mx-3" wire:click="azzera">0</button>
        <button type="button" class="btn btn-secondary mx-3" wire:click="sottrazione">-</button>
        <span> {{$count}}</span>
        <button type="button" class="btn btn-success mx-3" wire:click="somma">+</button>
        <button type="button" class="btn btn-secondary mx-3" wire:click="sottrazione2(2)">-</button>
        <button type="button" class="btn btn-success mx-3" wire:click="somma2(6)">+</button>
    </div>
</div>
