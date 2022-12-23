@props(['name', 'label', 'placeholder' => '', 'rows' => '10', 'cols' => '30', 'class' => 'form-control'])
<x-form.section>

    <x-form.label  name="{{ $name }}" label="{{ $label }}" />
    ‌
    <textarea class="{{$class}}" name="{{ $name }}" id="{{ $name }}" required placeholder="{{$placeholder}}" rows="{{$rows}}" cols="{{$cols}}">{{ $slot ?? old($name) }}</textarea>
    <x-form.error name="{{ $name }}" />

</x-form.section>
