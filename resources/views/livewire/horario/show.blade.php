<section class="w-full">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Horarios') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">Show {{ __('Horario') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="grid gap-6">
                        <div class="grid gap-2">
                            <flux:label>{{ __('Nombre') }}</flux:label>
                            <div class="text-sm text-gray-700">{{ $horario->nombre }}</div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <flux:button variant="primary" :href="route('horarios.index')">{{ __('Back') }}</flux:button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
