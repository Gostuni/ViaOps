@props(['content', 'action', 'type' => 'button'])

<div class="mb-4 w-28 h-10">
    <button type="{{ $type }}" {{ $attributes->merge([
                'class'=>"w-full h-full border border-gray-500 border-1 rounded-xl
                          bg-blue-500 py-1 px-1 text-stone-50 shadow-md hover:scale-103
                          hover:shadow-lg active:scale-95 transition-transform
                          duration-110 ease-in-out"
                ]) }}>
        {{ $content }}
    </button>
</div>