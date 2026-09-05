<x-layout title="Course Catalog — Student Portal">
    <div class="page-header" style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1rem;">
        <div>
            <h1 class="page-title">Curriculum Course Catalog</h1>
            <p class="page-subtitle">Bachelor of Science in Information Technology • Managed via <code>CourseController@index</code></p>
        </div>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">+ Propose New Course</a>
    </div>

    {{-- Search and Query String Filter Bar --}}
    <form method="GET" action="{{ route('courses.index') }}" class="filter-bar">
        <input 
            type="text" 
            name="q" 
            value="{{ $search }}" 
            placeholder="Search by course code, title, or keyword..." 
            class="search-input"
        >

        <select name="category" class="filter-select">
            <option value="">All Categories</option>
            <option value="Major" @selected($selectedCategory === 'Major')>Major Subjects</option>
            <option value="Core" @selected($selectedCategory === 'Core')>Core Subjects</option>
            <option value="Elective" @selected($selectedCategory === 'Elective')>Electives</option>
        </select>

        <button type="submit" class="btn btn-primary">Filter</button>

        @if(!empty($search) || !empty($selectedCategory))
            <a href="{{ route('courses.index') }}" class="btn btn-secondary">Reset Filter</a>
        @endif
    </form>

    {{-- Filter Notice --}}
    @if(!empty($search) || !empty($selectedCategory))
        <div style="margin-bottom: 1.25rem; font-size: 0.92rem; color: var(--text-muted);">
            Showing filtered courses
            @if(!empty($search)) matching keyword <strong>"{{ $search }}"</strong> @endif
            @if(!empty($selectedCategory)) in category <strong>{{ $selectedCategory }}</strong> @endif
            ({{ count($courses) }} found).
        </div>
    @endif

    {{-- Course Cards Grid using anonymous <x-course-card> component and @forelse --}}
    <div class="courses-grid">
        @forelse ($courses as $course)
            <x-course-card 
                :code="$course['code']" 
                :title="$course['title']" 
                :units="$course['units']" 
                :category="$course['category']" 
                :instructor="$course['instructor']" 
                :description="$course['description']"
            >
                {{-- Slot content passed into component --}}
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span><strong>Prerequisite:</strong> {{ $course['prerequisite'] }}</span>
                    <a href="{{ route('courses.show', $course['code']) }}" style="color: var(--primary); font-weight: 600; text-decoration: none;">View Details &rarr;</a>
                </div>
            </x-course-card>
        @empty
            <div style="grid-column: 1 / -1; background: var(--surface); padding: 3rem; text-align: center; border-radius: var(--radius-md); border: 1px dashed var(--border);">
                <h3 style="color: var(--dark); margin-bottom: 0.5rem;">No Courses Found</h3>
                <p style="color: var(--text-muted); margin-bottom: 1.25rem;">
                    No subjects matched your filter criteria. Try adjusting your search query or reset the filter.
                </p>
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">View All Courses</a>
            </div>
        @endforelse
    </div>
</x-layout>
