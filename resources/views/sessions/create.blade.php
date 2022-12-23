<x-admin-layout>
    
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-5">
            <h1 class="text-center font-bold text-xl">خوش برگشتی عزیزم!</h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf

                <x-form.input name="email" label="ایمیل تون" type="email" autocomplete="username"/>

                <x-form.input name="password" label="رمزعبور تون" type="password" autocomplete="current-password"/>

                <x-form.button>واردم کن!</x-form.button>
            </form>
        </main>

    </section>

</x-admin-layout>
