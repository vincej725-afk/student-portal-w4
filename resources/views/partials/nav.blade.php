<header class="navbar">
    <div class="nav-container">
        <a href="{{ route('home') }}" class="brand">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                <path d="M6 12v5c3 3 9 3 12 0v-5"/>
            </svg>
            <span>Trimex Portal</span>
            <span class="brand-badge">W4 Laravel</span>
        </a>

        <nav>
            <ul class="nav-links">
                <li>
                    <a href="{{ route('home') }}" @class(['nav-link', 'active' => request()->routeIs('home')])>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" @class(['nav-link', 'active' => request()->routeIs('about')])>
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ route('courses.index') }}" @class(['nav-link', 'active' => request()->routeIs('courses.index') || request()->routeIs('courses.show')])>
                        Courses
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" @class(['nav-link', 'active' => request()->routeIs('contact')])>
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('courses.create') }}" @class(['nav-link', 'btn-propose', 'active' => request()->routeIs('courses.create')])>
                        + Propose Course
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
