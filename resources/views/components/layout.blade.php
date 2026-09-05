<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Student Portal — Trimex Colleges' }}</title>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Application Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.nav')

    <main class="container">
        @isset($aside)
            <div class="layout-with-aside">
                <div class="main-content-area">
                    {{ $slot }}
                </div>
                <aside class="portal-aside">
                    {{ $aside }}
                </aside>
            </div>
        @else
            {{ $slot }}
        @endisset
    </main>

    @include('partials.footer')
</body>
</html>
