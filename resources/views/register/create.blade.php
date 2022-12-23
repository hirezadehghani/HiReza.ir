<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">به خانواده های رضا خوش اومدی!</h1>

            <form method="POST" action="/register" class="mt-10">
                @csrf
                <x-form.input name="name" label="اسم تون" />
                <x-form.input name="username" label="نام کاربری تون" autocomplete="username" />
                <x-form.input name="email" label="ایمیل تون" type="email" autocomplete="email" />
                <x-form.input name="password" label="رمز عبور تون" type="password" autocomplete="new-password" />

                <x-form.button>عضوم کن!</x-form.button>
            </form>
        </main>

    </section>

</x-layout>
