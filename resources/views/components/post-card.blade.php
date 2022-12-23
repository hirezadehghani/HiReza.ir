@props(['post'])

<article class="col-md-4 d-flex ftco-animate">
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
	                </p>
                </div>
                <h3 class="heading"><a href="/posts/{{$post->slug}}">{{ $post->title }}</a></h3>
                <p>{!! str_limit($post->excerpt, 120) !!}</p>
              </div>
            </div>
          </article>