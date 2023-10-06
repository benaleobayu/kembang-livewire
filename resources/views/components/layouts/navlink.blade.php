@props(['active' => false,
        'icon' => ''])

@php
    $classes = ($active ?? false)
            ? 'nav-link active'
            : 'nav-link'
@endphp

<li class="nav-item">
    <a {{ $attributes->merge(['class' => $classes]) }} href="#" class="nav-link px-2 text-truncate">
        <i class="bi {{ $icon }} fs-5"></i>
        <span class="d-none d-sm-inline">
            {{ $slot }}
        </span>
    </a>
</li>