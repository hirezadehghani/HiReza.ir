@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 border-b pd-2">
        {{ $heading }}
    </h1>
    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">دسترسی سریع</h4>
            <ul>
                <li>
                        <a href="javascript:void(0)" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}">داشبورد</a>
                </li>
                <li>
                    <a href="/admin/posts"
                        class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">مدیریت مطالب</a>
                </li>
                <li>
                    <a href="/admin/posts/create"
                        class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">مطلب تازه</a>
                </li>
                <li>
                    <a href="/admin/categories"
                        class="{{ request()->is('admin/categories') ? 'text-blue-500' : '' }}">دسته‌ بندی ها</a>
                </li>
                <li>
                    <a href="/admin/categories/create"
                        class="{{ request()->is('admin/categories/create') ? 'text-blue-500' : '' }}">دسته بندی تازه</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
