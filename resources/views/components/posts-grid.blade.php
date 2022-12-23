@props(['posts'])

    @if ($posts->count() > 0)
    <div class="row d-flex">
            @foreach ($posts->take(3) as $post)
                <x-post-card
                :post="$post"/>
            @endforeach
        </div>
    @endif
