@props(['name', 'label'])

<x-form.section>

    <x-form.label name="{{ $name }}" label="{{ $label }}" />

    <input class="mt-4 w-full p-2 border border-gray-200 rounded" name="{{ $name }}" id="{{ $name }}"
        {{ $attributes(['value' => old($name)]) }}>

    <x-form.error name="{{ $name }}" />

</x-form.section>
