@props(['comment'])
        <article>
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <header class="comment-body">
                    <h3>@if (!isset($comment->author->username))
                        {{ $comment->guestName }}
                    @else
                        {{ $comment->author->username }}
                    @endif
                </h3>
                    <div class="meta">
                    ارسال شده در
                    <time>{{ $comment->created_at->diffForHumans() }}</time>
                    </div>
                    </header>
                    <p>
                    {{ $comment->body }}
                    </p>
                    <p><a href="#add-comment" class="reply">پاسخ</a></p>
                  </header>
                </li>
        </article>