@extends('layouts.site')

@section('title', 'Our Care | HopeBridge Community Services')

@section('content')
    <section class="site-page-hero">
        <div class="site-container">
            <h1 class="site-page-title">Our Care</h1>
            <p class="site-lede">
                HopeBridge focuses on affordable, respectful housing support so residents can stabilize routines,
                access resources, and plan confidently for what comes next.
            </p>
        </div>
    </section>

    <section class="site-section">
        <div class="site-container site-prose">
            <h2 class="site-h3">What we prioritize</h2>
            <ul class="site-list">
                <li><strong>Safety and cleanliness</strong> — maintained homes with clear expectations and supportive coordination.</li>
                <li><strong>Accessibility</strong> — accommodations where appropriate for mobility and daily living needs.</li>
                <li><strong>Consistency</strong> — predictable environments that reduce stress during transitions.</li>
                <li><strong>Referrals</strong> — streamlined intake for agencies and families exploring placement.</li>
            </ul>
            <p>
                Whether someone needs transitional stability or longer-term housing with structured support, we aim to meet people where they are
                with dignity.
            </p>
            <p><a class="site-inline-link" href="{{ route('contact') }}">Contact us about referrals →</a></p>
        </div>
    </section>
@endsection
