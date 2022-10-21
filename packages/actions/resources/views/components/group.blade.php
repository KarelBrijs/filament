@props([
    'actions',
    'color' => null,
    'dropdownPlacement' => null,
    'icon' => 'heroicon-m-ellipsis-vertical',
    'label' => __('filament-actions::group.trigger.label'),
    'size' => null,
    'tooltip' => null,
])

<x-filament-support::dropdown
    :placement="$dropdownPlacement ?? 'bottom-end'"
    teleport
    {{ $attributes }}
>
    <x-slot name="trigger">
        <x-filament-support::icon-button
            :color="$color"
            :icon="$icon"
            :size="$size"
            :tooltip="$tooltip"
        >
            <x-slot name="label">
                {{ $label }}
            </x-slot>
        </x-filament-support::icon-button>
    </x-slot>

    <x-filament-support::dropdown.list>
        @foreach ($actions as $action)
            @if (! $action->isHidden())
                {{ $action }}
            @endif
        @endforeach
    </x-filament-support::dropdown.list>
</x-filament-support::dropdown>
