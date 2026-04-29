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
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @else
        {{-- Avoid 500 when assets are missing; run npm ci && npm run build (or deploy.ps1 on production). --}}
        <style>
            body.site{margin:0;font-family:Inter,system-ui,sans-serif;color:#2c3345;line-height:1.6}
            .site-container{width:min(1100px,92%);margin-inline:auto}
            .site-topbar{background:#0f4c5c;color:#fff;text-align:center;padding:.65rem 1rem;font-size:.92rem}
            .site-header{border-bottom:1px solid #e8ecf1;background:#fff;padding:1rem 0}
            .site-header__inner{display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:1rem}
            .site-logo{font-weight:700;color:#0f4c5c;text-decoration:none}
            .site-nav{display:flex;flex-wrap:wrap;gap:.35rem 1rem}.site-nav a{color:#2c3345;font-weight:600;text-decoration:none}
            .site-footer{border-top:1px solid #e8ecf1;padding:2rem 0;background:#f9fafb;color:#6b7280}
        </style>
    @endif
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
            <p class="site-footer__muted">Phone: <a href="tel:+17039811910">703-981-1910</a></p>
        </div>
    </footer>
</body>
</html>
