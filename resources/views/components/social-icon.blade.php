@props(['href' => '#', 'icon' => 'instagram', 'platform' => 'social'])

<a href="{{ $href }}" class="social-icon" title="{{ $platform }}">
    <img src="{{ asset('images/' . $icon . '.svg') }}" alt="{{ $platform }}" width="24" height="24">
</a>