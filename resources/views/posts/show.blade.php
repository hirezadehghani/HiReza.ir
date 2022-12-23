<x-layout>
    
<section class="hero-wrap js-fullheight text-right" @if(isset($post->thumbnail)) style="background-image: url('{{asset('storage/' . $post->thumbnail) }}');" @endif data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
            <h1 class="mb-3 bread"></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">های رضا <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">بلاگ <i class="ion-ios-arrow-forward"></i></a></span> <span> {{ $post->title }} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          <h2 class="mb-3">{{$post->title}}</h2>
          {!! $post->body !!}
          @if($tags)
          <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
               @foreach($tags as $tag)
                <a href="#" class="tag-cloud-link">{{ $tag }}</a>
              @endforeach
              </div>
            </div>
            @endif
            <div class="about-author d-flex p-4 bg-dark">
              <div class="bio ml-5">
                <img src="/images/profile.png" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3><a href="/?author={{ $post->author->username }}">{{$post->author->name}}</a></h3>
                <p> {{$post->author->info }}</p>
              </div>
            </div>


            @if($post->comments->count() > 0)
            <div class="pt-5 mt-5" id="comment">
              <h3 class="mb-5">{{ $post->comments->count() }} Comments</h3>
              @else
                <div id="comment">
              @endif
              <ul class="comment-list">

              @foreach ($post->comments as $comment)
                    <x-post-comment :comment="$comment" />
                @endforeach
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
              @include('posts._add-comment-form')

                </div>
            </div>

          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form method="GET" action="/#blog-section" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" name="search" class="form-control" placeholder="به دنبال چه می پویی؟"  value="{{ request('search') }}">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading-sidebar">Categories</h3>
              <ul class="categories">
                @foreach ($categories as $category)
              <li><a href="/?category={{ $category->slug }}#blog-section">{{ $category->name }}<span>({{ $category->posts->count() }})</span></a></li>
               @endforeach
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Recent Blog</h3>
              @foreach ($recentPosts->take(4) as $recentPost)
              @if ($recentPost->id == $post->id)
                @continue;
            @endif
              <div class="block-21 mb-4 d-flex">
              @if(isset($recentPost->thumbnail))  
                <a class="blog-img ml-4" style="background-image: url('<?= asset('storage/' . $recentPost->thumbnail) ?>');"></a>
                @else
                    <div class="blog-img ml-4"></div>
                @endif
                <div class="text">
                  <h3 class="heading"><a href="/posts/{{ $recentPost->slug }}">{{ $recentPost->title }}</a></h3>
                  <div class="meta">
                    <time><span class="icon-calendar"></span> {{ $recentPost->created_at->diffForHumans() }}</a></time>
                    <div><a href="/?author={{ $recentPost->author->username }}"><span class="icon-person"></span> {{ $recentPost->author->name }}</a></div>
                    <div><a href="/posts/{{ $recentPost->slug }}#comment"><span class="icon-chat"></span> {{ $recentPost->comments->count() }}</a></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">house</a>
                <a href="#" class="tag-cloud-link">office</a>
                <a href="#" class="tag-cloud-link">building</a>
                <a href="#" class="tag-cloud-link">land</a>
                <a href="#" class="tag-cloud-link">table</a>
                <a href="#" class="tag-cloud-link">interior</a>
                <a href="#" class="tag-cloud-link">exterior</a>
                <a href="#" class="tag-cloud-link">industrial</a>
              </div>
            </div>

            <!-- <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div> -->

        </div>
      </div>
    </section> <!-- .section -->

</x-layout>
