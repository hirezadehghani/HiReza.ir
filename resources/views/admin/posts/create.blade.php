<x-admin-layout>
    <x-setting heading="افزودن مطلب جدید">
        <form id="createPostForm" method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-adminForm.input name="title" label="عنوان" />
            <x-adminForm.input name="slug" label="آدرس کوتاه" />
            <x-adminForm.input name="thumbnail" label="تصویر بندانگشتی" type="file" />
            <x-adminForm.input name="thumbnail_alt" label="شرح کوتاه تصویر" />
            <x-adminForm.textarea name="excerpt" label="خلاصه">{{ old('excerpt') }}</x-adminForm.textarea>
            <x-adminForm.textarea id="body" name="body" label="شرح مطلب" class="border border-gray-200 p-2 w-full">{{ old('body') }}</x-adminForm.textarea>

            <x-adminForm.section>
            <x-adminForm.label name="category" label="دسته بندی" />
                ‌<select name="category_id" id="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : ''}}
                            >{{ $category->name }}</option>
                    @endforeach
                </select>

                <x-adminForm.error name="category"/>
            </x-adminForm.section>

            {{--  TODO: make this jquery file import refactor and going it to a base file --}}
            <!-- TAG IT PLUGIN JS -->
            <script src="{{ secure_asset('/assets/js/tag-it/jquery-1.10.2.min.js') }}" type="text/javascript" charset="utf-8"></script>
            <script src="{{ secure_asset('/assets/js/tag-it/jquery-ui.min.js') }}" type="text/javascript" charset="utf-8"></script>
            <script src="{{ secure_asset('/assets/js/tag-it/tag-it.min.js') }}" type="text/javascript" charset="utf-8"></script>

            <x-adminForm.input name="tags" id="allTags" hidden label="کلمه کلیدی" />
            <ul id="tags">
            </ul>
            
            <x-adminForm.button>نشر</x-submit-button>
        </form>
    </x-setting>
</x-admin-layout>
<script src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
$(window).on('load', function (){
        CKEDITOR.replace('body', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
});

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

            $("#tags").tagit({
                availableTags: [<?php for($i =0 ; $i < count($tags); $i++){ echo "'" . ($tags[$i]) . "',"; }?>]
            });
    });

    document.getElementById('createPostForm').addEventListener("submit",(function ()
    {
        document.getElementById('allTags').value = $("#tags").tagit("assignedTags").toString();
    }));
</script>
