<x-layout title="Propose New Course — Student Portal">
    <div class="page-header">
        <a href="{{ route('courses.index') }}" style="display: inline-flex; align-items: center; gap: 0.35rem; color: var(--primary); text-decoration: none; font-size: 0.9rem; font-weight: 600; margin-bottom: 0.75rem;">
            &larr; Back to Course Catalog
        </a>
        <h1 class="page-title">Propose New Course Offering</h1>
        <p class="page-subtitle">Protected by academic session middleware • Submits to <code>CourseController@store</code></p>
    </div>

    <x-alert type="warning" title="Curriculum Proposal Mode">
        Form input validation and persistent database storage will be implemented in Week 8 (Forms & Validation) and Week 6 (Database Models).
    </x-alert>

    <div class="form-card">
        <form method="POST" action="{{ route('courses.store') }}">
            {{-- Mandatory CSRF token directive --}}
            @csrf

            <div class="form-group">
                <label for="code" class="form-label">Course Code</label>
                <input type="text" id="code" name="code" class="form-control" placeholder="e.g. CYBER101" required>
            </div>

            <div class="form-group">
                <label for="title" class="form-label">Course Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="e.g. Cybersecurity Fundamentals" required>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div class="form-group">
                    <label for="units" class="form-label">Units</label>
                    <input type="number" id="units" name="units" class="form-control" value="3" min="1" max="6" required>
                </div>

                <div class="form-group">
                    <label for="category" class="form-label">Category</label>
                    <select id="category" name="category" class="form-control" required>
                        <option value="Major">Major</option>
                        <option value="Core">Core</option>
                        <option value="Elective">Elective</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="instructor" class="form-label">Lead Instructor</label>
                <input type="text" id="instructor" name="instructor" class="form-control" placeholder="e.g. Prof. Maria Santos" required>
            </div>

            <div class="form-group">
                <label for="prerequisite" class="form-label">Prerequisite Subject</label>
                <input type="text" id="prerequisite" name="prerequisite" class="form-control" placeholder="e.g. NET1 (or None)">
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Course Description</label>
                <textarea id="description" name="description" class="form-control" rows="4" placeholder="Summarize syllabus and target competencies..." required></textarea>
            </div>

            <div style="display: flex; gap: 0.75rem; justify-content: flex-end; margin-top: 1.5rem;">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit Course Proposal</button>
            </div>
        </form>
    </div>
</x-layout>
