@props(['name', 'label'])
<x-form.section>
    <x-form.label name="{{ $name }}" label="{{ $label }}" />

    <input class="form-control" name="{{ $name }}" id="{{ $name }}"
        {{ $attributes(['value' => old($name)]) }}>

    <x-form.error name="{{ $name }}" />
</x-form.section>