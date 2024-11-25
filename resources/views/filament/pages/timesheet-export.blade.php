<x-filament::page>
    <div class="w-full flex flex-col gap-6 justify-center items-center">
        <form wire:submit.prevent="create" class="w-full max-w-2xl">
            {{ $this->form }}
            <div class="mt-4">
                <x-filament::button type="submit" form="create" class="w-full">
                    {{ __('Create report') }}
                </x-filament::button>
            </div>
        </form>
    </div>
</x-filament::page>
