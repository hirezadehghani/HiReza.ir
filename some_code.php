        <!-- @php

        dd($post);
        use App\Models\PostTags;
        $tags = new PostTags::getTags($post->id);

        @endphp

          @foreach ($tags as $tag)
              {{ '#' . $tag }}
          @endforeach -->