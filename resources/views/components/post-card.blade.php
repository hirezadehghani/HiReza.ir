@props(['post', 'tags'])

<!-- <article class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              @if(isset($post->thumbnail))  
            <a href="/posts/{{ $post->slug }}" class="block-20" style="background-image: url('<?= asset('storage/' . $post->thumbnail) ?>');">
              </a>
              @endif
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<time class="mr-2">{{ $post->created_at->diffForHumans() }}</time>
	                	<a href="/?author={{ $post->author->username }}" class="mr-2">{{ $post->author->name }}</a>
	                	<a href="/posts/{{ $post->slug }}#comment" class="meta-chat"><span class="icon-chat"></span>{{  $post->comments->count() }}</a>
	                	<a href="/posts/{{ $post->slug }}#heart" class="meta-heart"><span class="icon-heart"></span>  
                      @if($post->like !== 0)
                      {{ $post->like }}
                      @else
                      {{0}}
                      @endif
                    </a>
	                </p>
                </div>
                <h3 class="heading"><a href="/posts/{{$post->slug}}">{{ $post->title }}</a></h3>
                <p>{!! str_limit($post->excerpt, 120) !!}</p>
              </div>
            </div>
          </article> -->

    <!–blog post – The Start –>

          <div class="wrapper"> 
    <div class="post-card">
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
        <p class="blog-description">{!! str_limit($post->excerpt, 120) !!}</p>
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
          </div>
        </div>
      </div>
    </div>
<!–blog post – The End –>