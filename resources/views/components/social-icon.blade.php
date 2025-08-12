@props(['href' => '#', 'icon' => '📱', 'platform' => 'social'])

<a href="{{ $href }}" class="social-icon" title="{{ $platform }}">
    {{ $icon }}
</a>