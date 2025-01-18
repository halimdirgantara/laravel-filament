<div class="flex flex-row justify-between items-center">
    <div class="text-sm text-base-content/50 mr-4">
        Page {{ $page }} of {{ $totalPages }}
    </div>
    <nav class="flex justify-end items-center gap-x-1">
        <button {{ $page == 1 ? 'disabled' : '' }} wire:click="previousPage" type="button"
            class="btn btn-soft">Previous</button>
        <div class="flex items-center gap-x-1">
            @for ($i = 1; $i <= $totalPages; $i++)
                <button type="button"
                    class="btn btn-soft btn-square {{ $page == $i ? 'aria-[current=page]:text-bg-soft-primary' : '' }}"
                    {{ $page == $i ? 'aria-current=page' : '' }}
                    wire:click="setPage({{ $i }})">{{ $i }}</button>
            @endfor
        </div>
        <button {{ $page == $totalPages ? 'disabled' : '' }} wire:click="nextPage" type="button"
            class="btn btn-soft">Next</button>
    </nav>
</div>
