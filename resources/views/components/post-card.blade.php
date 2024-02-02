@props(['post', 'tags', 'all_tags'])

<div class="wrapper">
  <div class="post-card">
    <a href="{{ '/posts/' . $post->slug }}">
      <!– banner image and text –>
        <div class="post-card-banner">
          <p class="category-tag popular">{{ $post->category->name }}</p>
          <img class="banner-img" src="@isset ($post->thumbnail){{asset('storage/' . $post->thumbnail)}} @else{{asset('images/1024-1024.png')}}@endisset" alt="@isset($post->thubmnail_alt) {{$post->thumbnail_alt}} @else {{'تصویر پیشفرض پست‌های بدون تصویر'}} @endisset">
        </div>
        <!– #tags,heading,description –>
          <div class="post-card-body">
            <p class="blog-hashtag">

            </p>
            <h2 class="blog-title">{{ $post->title }}</h2>
            <p class="blog-description">{!! str_limit($post->excerpt, 40) !!}</p>
            <!– Profile image, name, followers –>
              <div class="post-card-profile">

                <img class="profile-img" src="{{asset('images/profile.png')}}" alt="{{$post->author->name}}">

                <div class="post-card-profile-info">
                  <h3 class="profile-name">{{ $post->author->name }}</h3>
                  <p class="profile-followers">
                    @if($post->like > 0)
                    {{ $post->like }}
                    <span class="icon-heart"></span>
                    @endif
                    @if($post->comments->count() > 0)
                    {{ $post->comments->count() }}
                    <span class="icon-chat"></span>
                    @endif
                  </p>
    </a>
  </div>
</div>
</div>
</div>
<!–blog post – The End –>