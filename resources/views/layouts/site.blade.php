<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'HopeBridge Community Services — affordable housing support for seniors, veterans, disabled adults, and other populations.')">
    <title>@yield('title', 'HopeBridge Community Services')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="site">
    <div class="site-topbar">
        HopeBridge Community Services — Building bridges to stability, dignity, and independence.
    </div>

    <header class="site-header">
        <div class="site-container site-header__inner">
            <a class="site-logo" href="{{ route('home') }}">HopeBridge Community Services</a>
            <nav class="site-nav" aria-label="Primary">
                <a href="{{ route('home') }}" @class(['is-active' => request()->routeIs('home')])>Home</a>
                <a href="{{ route('our-care') }}" @class(['is-active' => request()->routeIs('our-care')])>Our Care</a>
                <a href="{{ route('demographics') }}" @class(['is-active' => request()->routeIs('demographics')])>Demographics Served</a>
                <a href="{{ route('about') }}" @class(['is-active' => request()->routeIs('about')])>About Us</a>
                <a href="{{ route('contact') }}" @class(['is-active' => request()->routeIs('contact')])>Contact Us</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="site-container">
            <p><strong>HopeBridge Community Services</strong> — Where hope meets opportunity.</p>
            <p class="site-footer__muted">Phone: <a href="tel:+15713906222">571-390-6222</a></p>
        </div>
    </footer>
</body>
</html>
