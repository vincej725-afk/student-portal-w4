<x-layout title="{{ $course['code'] }} — {{ $course['title'] }}">
    <div class="page-header">
        <a href="{{ route('courses.index') }}" style="display: inline-flex; align-items: center; gap: 0.35rem; color: var(--primary); text-decoration: none; font-size: 0.9rem; font-weight: 600; margin-bottom: 0.75rem;">
            &larr; Back to Course Catalog
        </a>
        <h1 class="page-title">{{ $course['code'] }}: {{ $course['title'] }}</h1>
        <p class="page-subtitle">Academic Unit: {{ $course['units'] }} Academic Credits • {{ $course['category'] }} Curriculum</p>
    </div>

    {{-- Course Main Details --}}
    <div style="background: var(--surface); padding: 2rem; border-radius: var(--radius-md); border: 1px solid var(--border); box-shadow: var(--shadow-sm); margin-bottom: 1.5rem;">
        <h2 style="font-size: 1.25rem; color: var(--dark); margin-bottom: 1rem;">Course Description</h2>
        <p style="color: var(--text-main); font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
            {{ $course['description'] }}
        </p>

        <h3 style="font-size: 1.1rem; color: var(--dark); margin-bottom: 0.75rem;">Course Competencies & Topics</h3>
        <ul style="padding-left: 1.25rem; color: var(--text-main); line-height: 1.7;">
            <li>Theoretical foundations and industry-standard workflows</li>
            <li>Laboratory exercises and practical code demonstrations</li>
            <li>Midterm and Final capstone assessments</li>
        </ul>
    </div>

    {{-- Named slot: <x-slot:aside> for the sidebar --}}
    <x-slot:aside>
        <div class="aside-panel">
            <h3 class="aside-title">Quick Course Facts</h3>

            <div class="fact-item">
                <span class="fact-label">Course Code</span>
                <p class="fact-value">{{ $course['code'] }}</p>
            </div>

            <div class="fact-item">
                <span class="fact-label">Classification</span>
                <p class="fact-value">
                    <span class="badge {{ strtolower($course['category']) === 'major' ? 'badge-major' : (strtolower($course['category']) === 'core' ? 'badge-core' : 'badge-elective') }}">
                        {{ $course['category'] }} Subject
                    </span>
                </p>
            </div>

            <div class="fact-item">
                <span class="fact-label">Academic Credits</span>
                <p class="fact-value">{{ $course['units'] }} Lecture / Lab Units</p>
            </div>

            <div class="fact-item">
                <span class="fact-label">Assigned Instructor</span>
                <p class="fact-value">{{ $course['instructor'] }}</p>
            </div>

            <div class="fact-item">
                <span class="fact-label">Class Schedule</span>
                <p class="fact-value">{{ $course['schedule'] }}</p>
            </div>

            <div class="fact-item">
                <span class="fact-label">Prerequisite Requirement</span>
                <p class="fact-value" style="color: var(--secondary); font-weight: 500;">
                    {{ $course['prerequisite'] }}
                </p>
            </div>

            <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid var(--border);">
                <a href="{{ route('courses.edit', $course['code']) }}" class="btn btn-secondary" style="width: 100%; text-align: center;">
                    Edit Course Details (Week 8)
                </a>
            </div>
        </div>
    </x-slot:aside>
</x-layout>
