@props([
    'code',
    'title',
    'units' => 3,
    'category' => 'Major',
    'instructor' => '',
    'description' => '',
])

<article {{ $attributes->merge(['class' => 'course-card']) }}>
    <div class="card-header-row">
        <h2>
            <a href="{{ route('courses.show', $code) }}" class="course-code-link">
                {{ $code }}
            </a>
        </h2>
        <span class="badge {{ strtolower($category) === 'major' ? 'badge-major' : (strtolower($category) === 'core' ? 'badge-core' : 'badge-elective') }}">
            {{ $category }}
        </span>
    </div>

    <h3 class="course-title">{{ $title }}</h3>

    @if (!empty($description))
        <p class="course-desc">{{ Str::limit($description, 110) }}</p>
    @endif

    <div class="card-footer-meta">
        <span>{{ $instructor ?: 'Assigned Faculty' }}</span>
        <span class="badge badge-units">{{ $units }} Units</span>
    </div>

    @if ($slot->isNotEmpty())
        <div class="card-slot-box">
            {{ $slot }}
        </div>
    @endif
</article>
