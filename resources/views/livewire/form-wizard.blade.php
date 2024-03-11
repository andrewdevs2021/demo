<div class="flex flex-col items-center">
    @if ($errors->any())
        <div class="flex flex-col">
            @foreach ($errors->all() as $error)
                <div><span class="text-red-500 text-xs">{{ $error }}</span></div>
            @endforeach
        </div>
    @endif
    <form action="" class="p-5" wire:submit="newInfos">
        @if ($currentPage === 1)
            <livewire:form-wizard.page1 />
        @elseif ($currentPage === 2)
            <livewire:form-wizard.page2 />
            @if ($canSubmit == true)
                <button wire:click="submitForm" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md mt-4">Submit</button>
            @else
                <span class="text-red-500 text-xs">{{ $errorMessage }}</span>
            @endif
        @endif

    </form>
    @if ($currentPage === 1)
        <button wire:click="nextPage" class="bg-blue-500 text-white py-2 px-4 rounded">Next</button>
    @elseif ($currentPage === 2)
        <button wire:click="previousPage" class="bg-gray-500 text-white py-2 px-4 rounded">Previous</button>
    @endif
</div>
