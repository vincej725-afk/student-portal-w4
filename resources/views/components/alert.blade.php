<div {{ $attributes->merge(['class' => 'alert ' . $cssClass()]) }} role="alert">
    <span class="alert-icon" style="font-weight: 800; font-size: 1.15rem; line-height: 1;">{{ $icon() }}</span>
    <div class="alert-content">
        @if ($title)
            <strong style="display: block; margin-bottom: 0.25rem;">{{ $title }}</strong>
        @endif
        {{ $message ?? $slot }}
    </div>
</div>