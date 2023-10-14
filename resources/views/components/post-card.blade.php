@props(['post', 'tags', 'all_tags'])

<div class="wrapper"> 
    <div class="post-card">
    <a href="{{ '/posts/' . $post->slug }}">
    <!– banner image and text –>
      <div class="post-card-banner">
        <p class="category-tag popular">{{ $post->title }}</p>
        <img class="banner-img" src="<?= asset('storage/' . $post->thumbnail) ?>" alt="{{ $post->thumbnail_alt }}">        
      </div>
<!– #tags,heading,description –>
      <div class="post-card-body">
        <p class="blog-hashtag">

        </p>
        <h2 class="blog-title">{{ $post->title }}</h2>
        <p class="blog-description">{!! str_limit($post->excerpt, 40) !!}</p>
<!– Profile image, name, followers –>
        <div class="post-card-profile">
          <img class="profile-img" src="<?= asset('storage/' . $post->thumbnail) ?>" alt="{{ $post->thumbnail_alt }}">
          <div class="post-card-profile-info">
            <h3 class="profile-name">{{ $post->author->username }}</h3>
            <p class="profile-followers">
            @if($post->like !== 0)
                      {{ $post->like }}
                      @else
                      {{0}}
            @endif
            </p>
            </a>
          </div>
        </div>
      </div>
</div>
      <!–blog post – The End –>
