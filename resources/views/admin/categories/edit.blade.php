<x-admin-layout>
    <x-setting heading="افزودن دسته بندی جدید">
        <form action="/admin/categories/{{ $category->id }}" method="POST">
            @csrf
            @method('PATCH')

            <x-adminForm.input name="name" label="عنوان" :value="old('name', $category->name)" />
            <x-adminForm.input name="slug" label="آدرس کوتاه" :value="old('slug', $category->slug)" />

            <x-adminForm.button>افزودن</x-adminForm.button>
        </form>
    </x-setting>
</x-admin-layout>