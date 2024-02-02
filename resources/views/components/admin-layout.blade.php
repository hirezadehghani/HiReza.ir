<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>های رضا | غواصی در اقیانوس کامپیوتر</title>
<link href= "{{ asset('assets/css/tailwind.min.css') }}" rel="stylesheet">
<link href= "{{ asset('app.css') }}" rel="stylesheet">
<meta name="robots" content="noindex">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tag-it/jquery.tagit.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tag-it/tagit.ui-zendesk.css') }}">
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="direction: rtl; font-family: B Nazanin, Open Sans, sans-serif;">
<div id="loader"></div>
    <div id="content">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/128-47.png" alt="Hireza Logo">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button type="button" href="/login" class="ml-6 text-xs font-bold">{{ auth()->user()->name }}، خوش برگشتی!</button>
                    </x-slot>
                @admin
                    <x-dropdown-item
                        href="/admin/posts"
                        :active="request()->is('admin/posts')"
                    >
                        داشبورد
                    </x-dropdown-item>
        @endadmin

            <x-dropdown-item
                href="#"
                x-data="{}"
                @click.prevent="document.querySelector('#logout-form').submit()"
            >
                بای بای!
            </x-dropdown-item>

                <form id="logout-form" action="/logout" method="POST" class="hidden">
                        @csrf
                </form>
    </x-dropdown>
                @else
                    <a href="/register" class="ml-6 text-xs font-bold">پیوستن به های رضا</a>
                    <a href="/login" class="ml-6 text-xs font-bold">ورود</a>
                @endauth
            </div>
        </nav>

        {{ $slot }}

    </section>

    <x-flash />
    </div>
    
    <script>
        var loader;

function loadNow(opacity) {
    if (opacity <= 0) {
        displayContent();
    } else {
        loader.style.opacity = opacity;
        window.setTimeout(function() {
            loadNow(opacity - 0.05);
        }, 50);
    }
}

function displayContent() {
    loader.style.display = 'none';
    document.getElementById('content').style.display = 'block';
}

document.addEventListener("DOMContentLoaded", function() {
    loader = document.getElementById('loader');
    loadNow(1);
});
    </script>

    <!-- <script src="{{ asset('/assets/js/jquery.min.js') }}"></script> -->
    <script src="{{asset('/assets/js/alpine.min.js')}}" defer></script>

</body>
</html>