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

<script type="text/javascript">
$(document).ready(function() {
    // TODO: refactor this function and put it to a global file
    $('#title').on('input', 
        function (e) {
            $('#slug').val(
                function(){
                let text = $('#title').val()
                // TODO: Thiis regex for removing special characters from title not working at all :) 
                text.replace(/^[^ !"`'#%&,:;<>=@{}~\$\(\)\*\+\/\\\?\[\]\^\|]+$/g, '')
                return text.replace(/ /g, '-');
            });
        });
    });
</script>