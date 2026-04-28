@extends('layouts.site')

@section('title', 'HopeBridge Community Services | Stability, Dignity, Independence')

@section('content')
    <section class="site-hero">
        <div class="site-container">
            <h1>Services and programs for seniors, veterans, disabled, and other special needs populations.</h1>
            <p class="site-lede">
                HopeBridge Community Services provides affordable, all-inclusive housing support focused on stability and long-term progress.
                Where hope meets opportunity, we support every step forward with safe and dependable care.
            </p>
            <div class="site-actions">
                <a class="site-btn site-btn--primary" href="{{ route('contact') }}">Referral / contact</a>
                <a class="site-btn site-btn--outline" href="{{ route('about') }}">Our mission</a>
            </div>
        </div>
    </section>

    <section class="site-section" id="demographics">
        <div class="site-container">
            <h2 class="site-h2">Demographics Served</h2>
            <p class="site-intro">
                Since opening our first home, we have expanded support for multiple communities in need of affordable,
                quality housing and structured care.
            </p>
            <div class="site-grid">
                <article class="site-card"><h3>Disabled adults</h3><p>Accessible and supportive daily living environments.</p></article>
                <article class="site-card"><h3>Veterans</h3><p>Stable housing options with care-centered coordination.</p></article>
                <article class="site-card"><h3>Seniors</h3><p>Comfort-focused homes designed for long-term support.</p></article>
                <article class="site-card"><h3>Sober living</h3><p>Structured spaces for recovery and healthier routines.</p></article>
                <article class="site-card"><h3>Transitional housing</h3><p>Temporary stability while planning next-stage housing.</p></article>
                <article class="site-card"><h3>Re-entry and low income</h3><p>Affordable, safe housing with practical guidance.</p></article>
            </div>
            <p class="site-more"><a href="{{ route('demographics') }}">Learn more about demographics served →</a></p>
        </div>
    </section>

    <section class="site-section site-section--muted" id="care">
        <div class="site-container">
            <h2 class="site-h2">Our Care</h2>
            <p class="site-intro">
                Our properties are built around safety, affordability, and inclusion. Every resident receives support through
                clean housing, resource coordination, and respectful service.
            </p>
            <div class="site-grid site-grid--3">
                <article class="site-card"><h3>All-inclusive living</h3><p>Housing plans designed to reduce barriers and stress.</p></article>
                <article class="site-card"><h3>Referral-based intake</h3><p>Simple referral process for individuals and agencies.</p></article>
                <article class="site-card"><h3>Community-centered</h3><p>Homes that promote belonging, growth, and stability.</p></article>
            </div>
            <p class="site-more"><a href="{{ route('our-care') }}">Explore our care model →</a></p>
        </div>
    </section>

    <section class="site-section">
        <div class="site-container site-banner">
            <h2 class="site-h2 site-banner__title">Our mission</h2>
            <p class="site-banner__text">
                Building bridges to stability, dignity, and independence. Where hope meets opportunity — supporting every step forward.
            </p>
        </div>
    </section>
@endsection
