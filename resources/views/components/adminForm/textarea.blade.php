@props(['name', 'label', 'placeholder' => '', 'rows' => '', 'class' => 'border border-gray-200 p-2 w-full rounded'])
<x-form.section>

    <x-form.label  name="{{ $name }}" label="{{ $label }}" />
   
    <textarea class="{{$class}}" name="{{ $name }}" id="{{ $name }}" required placeholder="{{$placeholder}}" rows="{{$rows}}">{{ $slot ?? old($name) }}</textarea>
    <x-form.error name="{{ $name }}" />

</x-form.section>
