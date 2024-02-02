<header>
    <h3 class="mb-5" id="add-comment">
        @if ($post->comments->isEmpty())
        <h2 class="mr-4 mb-4">همیشه اول بودن جذابه! اولین نظر این پست رو تو بزار :)</h2>
        @else
        <h2 class="mr-4 mb-4">با نظر زیبات به من انرژی بده :)</h2>
            @endif
        </h3>
    </header>
                <form id="comment-form" method="POST" class="p-5 bg-dark" action="/posts/{{ $post->slug }}/comments">
        @csrf
        @guest
            <div class="flex justify-between">
                <x-form.input name="guestName" label="*اسم تون" />
                <x-form.input name="guestEmail" type="email" label="*ایمیل تون" />
            </div>
            {{-- flex --}}
                <x-form.input name="guestSite" type="url" label="وبسایت تون (اختیاری)" />
        @endguest

        <x-form.textarea name="body" label="متن نظر" rows="5" placeholder="جدی می گم از نظرت استقبال می کنم ها! لطفا برام بنویس" />

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input hidden name="comment-id" value=""
         autocomplete="off"></input>
        <x-form.button>بفرست بِره</x-submit-button>

                </form>

        @push('footer')
        <script>     
        let reply = document.getElementsByName('reply');
        console.log(reply);
        
        Array.from(reply).forEach(async (r) => {
            let comment_id = r.getAttribute('value');
            r.addEventListener("click", function ()
            {
                // console.log(comment_id);
                let comment_input = document.getElementsByName('comment-id');
                comment_input[0].setAttribute('value', comment_id);

                // set comment name to '@' parent comment name
                // let comment_name = document.getElementById('comment-name');
                // comment_name = comment_name.innerText;
                // new_comment_body = document.getElementById('body').value = 'در پاسخ به @' + comment_name + ' ';
        });
    });
        </script>
        @endpush