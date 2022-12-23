@if (session()->has('success'))
<div x-data="{show: true}"
     x-init="setTimeout(() => show = false, 4000)"
     x-show="show" x-transition
style="position: fixed; --tw-text-opacity: 1; padding-top: .5rem;
  padding-bottom: .5rem; padding-left: 1rem;
padding-right: 1rem; --tw-bg-opacity: 1;
background-color: rgba(255,189,57,var(--tw-bg-opacity)); border-radius: .75rem; bottom: .75rem; right: .75rem; font-size: .875rem;
line-height: 1.25rem;"
>
    <p style="color:#000;"
    >{{ session('success') }}</p>
</div>
@endif
