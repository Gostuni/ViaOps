<div class="bg-muted flex min-h-full flex-col items-center justify-center gap-6 p-6 md:p-10">
    <div class="flex w-full max-w-md min-w-3xs flex-col gap-6">
        <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
            <span class="flex h-9 w-9 items-center justify-center rounded-md">
                <x-app-logo-icon class="size-9 fill-current text-black" />
            </span>

            <span class="sr-only">{{ config('app.name', 'ViaOps') }}</span>
        </a>

        <div class="flex flex-col gap-6">
            <div class="rounded-xl border-2 bg-white text-stone-800 shadow-md">
                <div class="px-10 pt-8 pb-4 w-full flex">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
@fluxScripts