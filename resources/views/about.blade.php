<x-layout title="About — Student Portal">
    <div class="page-header">
        <h1 class="page-title">About College & Curriculum</h1>
        <p class="page-subtitle">{{ $departmentInfo['name'] }} • {{ $departmentInfo['program'] }}</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
        <div style="background: var(--surface); padding: 1.75rem; border-radius: var(--radius-md); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
            <h2 style="font-size: 1.25rem; color: var(--dark); margin-bottom: 1rem;">Course Metadata</h2>
            <p style="margin-bottom: 0.5rem;"><strong>Course Subject:</strong> {{ $departmentInfo['course'] }}</p>
            <p style="margin-bottom: 0.5rem;"><strong>Current Term:</strong> {{ $departmentInfo['term'] }}</p>
            <p style="margin-bottom: 0.5rem;"><strong>Department Faculty:</strong> {{ $departmentInfo['instructor'] }}</p>
            <p style="margin-bottom: 0.5rem;"><strong>Architecture:</strong> Model-View-Controller (MVC)</p>
        </div>

        <div style="background: var(--surface); padding: 1.75rem; border-radius: var(--radius-md); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
            <h2 style="font-size: 1.25rem; color: var(--dark); margin-bottom: 1rem;">Week 4 Lab Target</h2>
            <p style="color: var(--text-muted); line-height: 1.6;">
                The objective of this laboratory exercise is to refactor all raw closure routes into testable controllers, register standard RESTful resource controllers, implement component-based layouts, and master Blade templating directives in preparation for Prelim Exams.
            </p>
        </div>
    </div>

    <div style="background: var(--surface); padding: 2rem; border-radius: var(--radius-md); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
        <h2 style="font-size: 1.35rem; color: var(--dark); margin-bottom: 1.25rem;">Key Learning Competencies</h2>
        <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.75rem;">
            @foreach ($competencies as $competency)
                <li style="display: flex; align-items: flex-start; gap: 0.75rem; padding: 0.75rem 1rem; background: #f8fafc; border-radius: var(--radius-sm); border: 1px solid var(--border);">
                    <span style="background: var(--primary); color: #fff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 700; flex-shrink: 0;">
                        {{ $loop->iteration }}
                    </span>
                    <span style="color: var(--text-main); font-weight: 500;">{{ $competency }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
