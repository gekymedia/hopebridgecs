@extends('layouts.site')

@section('title', 'Demographics Served | HopeBridge Community Services')

@section('content')
    <section class="site-page-hero">
        <div class="site-container">
            <h1 class="site-page-title">Demographics served</h1>
            <p class="site-lede">
                We serve diverse populations who benefit from affordable housing paired with practical coordination — seniors,
                veterans, disabled adults, people in recovery, and others navigating housing insecurity or transition.
            </p>
        </div>
    </section>

    <section class="site-section">
        <div class="site-container">
            <div class="site-grid">
                <article class="site-card"><h3>Disabled adults</h3><p>Daily living support within stable, accessible housing.</p></article>
                <article class="site-card"><h3>Veterans</h3><p>Housing stability coordinated with community resources.</p></article>
                <article class="site-card"><h3>Seniors</h3><p>Comfort-oriented accommodations with predictable routines.</p></article>
                <article class="site-card"><h3>Sober living</h3><p>Structured environments that reinforce healthier habits.</p></article>
                <article class="site-card"><h3>Transitional housing</h3><p>Bridge periods between crisis housing and long-term placement.</p></article>
                <article class="site-card"><h3>Re-entry & low income</h3><p>Affordable options that emphasize practical next steps.</p></article>
            </div>
            <p class="site-more"><a href="{{ route('contact') }}">Ask about availability →</a></p>
        </div>
    </section>
@endsection
