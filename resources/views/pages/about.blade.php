@extends('layouts.site')

@section('title', 'About Us | HopeBridge Community Services')

@section('content')
    <section class="site-page-hero">
        <div class="site-container">
            <h1 class="site-page-title">About HopeBridge Community Services</h1>
            <p class="site-lede">
                HopeBridge Community Services helps individuals and families access safe, quality, and affordable housing support.
                Our mission is simple: stability, dignity, and independence — meeting opportunity with practical care.
            </p>
        </div>
    </section>

    <section class="site-section">
        <div class="site-container site-prose">
            <p>
                We believe housing is foundational. When people have a dependable place to live and respectful coordination around daily needs,
                other goals — health, employment, relationships — become more achievable.
            </p>
            <p>
                This site supports referrals and inquiry today; additional tools such as database-backed referral workflows or admin dashboards
                can be layered on as your operations grow.
            </p>
            <p><a class="site-inline-link" href="{{ route('contact') }}">Get in touch →</a></p>
        </div>
    </section>
@endsection
