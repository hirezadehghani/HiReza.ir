@props(['active' => false])
@php
$classes = 'block text-right px-3 text-small leading-6 hover:bg-blue-500 hover:text-white focus:text-white py-2';

if ($active) {
    $classes .= ' bg-blue-700 text-white';
}
@endphp
<a {{ $attributes(['class' => $classes]) }}>{{ $slot }}
</a>
