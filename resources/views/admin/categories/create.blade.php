<x-admin-layout>
    <x-setting heading="افزودن دسته بندی جدید">
        <form action="/admin/categories" method="POST">
            @csrf

            <x-adminForm.input name="name" label="عنوان" />
            <x-adminForm.input name="slug" label="آدرس کوتاه" />

            <x-adminForm.button>افزودن</x-form.button>
        </form>
    </x-setting>
</x-admin-layout>