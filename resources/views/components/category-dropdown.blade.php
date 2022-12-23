<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-36 text-right flex lg:inline-flex">
            {{ isset($currentCategory) ? $currentCategory->name : 'دسته بندی ها' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>

    {{-- Slot --}}
    <x-dropdown-item href="/?{{http_build_query(request()->except('category', 'page')) }}"
        :active="!$currentCategory">همه</x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item
        href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" :active='$category->is($currentCategory)'>
            {{ $category->name }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
