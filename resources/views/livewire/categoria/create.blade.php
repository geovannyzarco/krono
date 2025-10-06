<section class="w-full">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Categorias') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">Create new {{ __('Categoria') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <form wire:submit.prevent="save">
                        @include('livewire.categoria.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
