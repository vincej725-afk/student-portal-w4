<x-layout title="Home — Student Portal">
    <div class="page-header">
        <h1 class="page-title">Welcome to Trimex Student Portal</h1>
        <p class="page-subtitle">Academic Year 2026–2027 • College of Computer Studies</p>
    </div>

    {{-- Class-based component demonstration --}}
    <x-alert type="info" :title="$announcement['title']">
        {{ $announcement['message'] }} (Target Date: {{ $announcement['date'] }})
    </x-alert>

    {{-- Statistics Summary --}}
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.25rem; margin-bottom: 2rem;">
        <div style="background: var(--surface); padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
            <span style="font-size: 0.8rem; text-transform: uppercase; font-weight: 700; color: var(--text-muted);">Current Term</span>
            <h3 style="font-size: 1.25rem; color: var(--dark); margin-top: 0.35rem;">{{ $stats['current_semester'] }}</h3>
        </div>

        <div style="background: var(--surface); padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
            <span style="font-size: 0.8rem; text-transform: uppercase; font-weight: 700; color: var(--text-muted);">Enrolled IT Students</span>
            <h3 style="font-size: 1.25rem; color: var(--primary); margin-top: 0.35rem;">{{ number_format($stats['enrolled_students']) }}</h3>
        </div>

        <div style="background: var(--surface); padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
            <span style="font-size: 0.8rem; text-transform: uppercase; font-weight: 700; color: var(--text-muted);">Active Curriculum Courses</span>
            <h3 style="font-size: 1.25rem; color: var(--success); margin-top: 0.35rem;">{{ $stats['active_courses'] }} Subjects</h3>
        </div>
    </div>

    {{-- Quick Action Cards --}}
    <div style="background: var(--surface); padding: 2rem; border-radius: var(--radius-md); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
        <h2 style="font-size: 1.35rem; color: var(--dark); margin-bottom: 0.75rem;">Lab Exercise 4 Architecture Overview</h2>
        <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
            This web application demonstrates strict Laravel MVC separation of concerns. All route logic has been extracted from closures into dedicated controllers, RESTful conventions are enforced via <code>Route::resource()</code>, and views are orchestrated using modern Blade layouts, partials, and anonymous/class-based components.
        </p>

        <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
            <a href="{{ route('courses.index') }}" class="btn btn-primary">Browse Course Catalog</a>
            <a href="{{ route('courses.create') }}" class="btn btn-secondary">+ Propose Course</a>
            <a href="{{ route('about') }}" class="btn btn-secondary">Curriculum Competencies</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary">Student Services</a>
        </div>
    </div>
</x-layout>
