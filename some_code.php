        <!-- @php

        dd($post);
        use App\Models\PostTags;
        $tags = new PostTags::getTags($post->id);

        @endphp

          @foreach ($tags as $tag)
              {{ '#' . $tag }}
          @endforeach -->

          <!-- post-card -->

        
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

          <!-- SHOW PARENT COMMENTS -->
          @if($comment->parent_id === NULL)
                      
                      @endif
      
                      @php $replies = [] @endphp 
                      <!-- FOR CHILD IN CHILD REPLIES -->
                      
                      <!-- SHOW REPLIES -->
                      @foreach ($post->comments as $reply)
                        
                        @if($reply->parent_id === $comment->id)
                        <!-- SHOW EVERY COMMENT WITH ABOVE PARENT_ID -->
                          @php $replies[] += $reply->id @endphp
                          <!-- SHOW IT'S REPLY -->
                          <x-post-comment :comment="$reply" :reply="true" />
                          @endif
      
                          @endforeach
                          
                          @foreach($post->comments as $child_reply)
                            @foreach ($replies as $reply)
                                  @if($child_reply->parent_id === $reply)
                                    <x-post-comment :comment="$child_reply" :reply="true" />
                                    @endif
                            @endforeach
                          @endforeach
                                  
                          @endforeach
                          @dd($replies)