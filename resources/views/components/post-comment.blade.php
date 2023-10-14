@props(['comment', 'isreply', 'parent_id'])
        <article>
                <li class="comment @if(isset($isreply) && ($isreply === true)) {{ 'children' }} @endif">
                  <div class="vcard bio">
                    <img src="{{asset('images/person_1.jpg')}}" alt="Image placeholder">
                  </div>
                  <header class="comment-body">
                    <h3 id="comment-name">@if (!isset($comment->author->username))
                        {{ $comment->guestName }}
                    @else
                        {{ $comment->author->name }}
                    @endif
                </h3>
                    <div class="meta">
                    ارسال شده در
                    <time>{{ $comment->created_at->diffForHumans() }}</time>
                    </div>
                    </header>
                    <p id="comment-body">
                    {{ $comment->body }}
                    </p>
                    <p><a href="#add-comment" class="reply" name="reply" value="@isset($parent_id){{$parent_id}}@else{{$comment->id}}@endisset">پاسخ</a></p>
                  </header>
                </li>
        </article>