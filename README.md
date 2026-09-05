# Trimex Colleges — Student Portal Mini-Site
## WEBDEV3 Week 4: Controllers and Views Lab Exercise Build

This project implements **Lab Exercise 4 — Controllers-and-Views Build** according to the Week 4 student curriculum requirements.

### Key Architecture Features
1. **Zero Closures in `routes/web.php`:**
   - `GET /` &rarr; `HomeController@index` (named `home`)
   - `GET /about` &rarr; `AboutController@index` (named `about`)
   - `GET /contact` &rarr; `ContactController` (invokable, named `contact`)
   - `Route::resource('courses', CourseController::class)` with 7 RESTful actions (`index`, `create`, `store`, `show`, `edit`, `update`, `destroy`)
2. **Middleware Pipeline:**
   - `EnsureEnrollmentActive` custom middleware applied to course operations (`courses.create`) and registered as an alias in `bootstrap/app.php`.
3. **Blade Architecture:**
   - Component-based layout `<x-layout title="...">` (`resources/views/components/layout.blade.php`) supporting primary slot `{{ $slot }}` and named slot `<x-slot:aside>`.
   - Reusable partials via `@include`: `partials/nav.blade.php` (with active route highlighting via `request()->routeIs()`) and `partials/footer.blade.php`.
   - Anonymous component `<x-course-card>` (`resources/views/components/course-card.blade.php`) declaring `@props`, merging `$attributes`, and slot checking.
   - Class-based component `<x-alert>` (`App\View\Components\Alert`) with PHP 8 match expression method `cssClass()` and icon helpers.
4. **Clean Route Links:**
   - 100% of internal links generated via the `route()` helper (e.g. `route('courses.show', $course['code'])`).

---



Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
