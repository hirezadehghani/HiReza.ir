<x-admin-layout>
    <x-setting heading="{{ 'ویرایش مطلب: ' . $post->title }}">
        <form id="PostForm" method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">            
            @csrf
            @method('PATCH')

            <x-adminForm.input name="title" label="عنوان" :value="old('title', $post->title)" />
            <x-adminForm.input name="slug" label="آدرس کوتاه" :value="old('slug', $post->slug)" />

                <div class="flex mt-6">
                    <div class="flex-1">
                        <x-adminForm.input name="thumbnail" label="تصویر بندانگشتی" type="file" :value="old('thumbnail', $post->thumbnail)" />
                    </div>
                @if(isset($post->thumbnail))
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" class="rounded-xl ml-6" width="100"
                    >
                @endif
                </div>

                <x-adminForm.input name="thumbnail_alt" label="شرح کوتاه تصویر" :value="old('thumbnail_alt', $post->thumbnail_alt)" />
            <x-adminForm.textarea name="excerpt" label="خلاصه">{{ old('excerpt', $post->excerpt) }} </x-adminForm.textarea>
            <x-adminForm.textarea id="body" name="body" label="شرح مطلب" class="border border-gray-200 p-2 w-full">
                {{ old('body', $post->body) }}
            </x-adminForm.textarea>

            <x-adminForm.section>
                <x-adminForm.label name="category" label="دسته بندی" />
                ‌<select name="category_id" id="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp
                    @foreach ($categories as $category)
                        <option
                                value="{{ $category->id }}"
                                {{ old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}
                            >{{ $category->name }}</option>
                    @endforeach
                </select>

                <x-adminForm.error name="category" />
            </x-adminForm.section>

            <script src="{{ asset('/assets/js/tag-it/jquery-1.10.2.min.js') }}" type="text/javascript" charset="utf-8"></script>
            <script src="{{ asset('/assets/js/tag-it/jquery-ui.min.js') }}" type="text/javascript" charset="utf-8"></script>
            <script src="{{ asset('/assets/js/tag-it/tag-it.min.js') }}" type="text/javascript" charset="utf-8"></script>

            <span class="mb-3 block">کلمات کلیدی</span>
            <ul id="tags">
                <?php foreach($postTags as $postTag){ ?>
                    <li><?= $postTag?></li>
                <?php } ?>
                
            </ul>
            <input type="text" name="tags" id="allTags" hidden value="{{old('allTags')}}">


            <x-adminForm.button>بروزآوری</x-submit-button>
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
</script>

<script>
$(document).ready(function() {

        $("#tags").tagit({
            availableTags: [<?php for($i =0 ; $i < count($tags); $i++){ echo "'" . ($tags[$i]) . "',"; }?>],
            allowSpaces: true,
        });
    });

    document.getElementById('PostForm').addEventListener("submit",(function ()
    {
        document.getElementById('allTags').value = $("#tags").tagit("assignedTags").toString();
    }));
</script>
