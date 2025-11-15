@props(['placeholder', 'name', 'label' => null, 'type' => 'text'])

<div class="mb-4 w-full max-w-2xs">
    @if ($label)
        <label for="{{ $name }}" class="block text-lg ml-1 mb-1 ">
            {{ $label }}
        </label>
    @endif

    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
        {{ $attributes->merge([
            'class' => 'w-full border-gray-500 border-2 rounded-lg px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-600'
        ])}}>
</div>