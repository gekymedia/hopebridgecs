@extends('layouts.site')

@section('title', 'Contact Us | HopeBridge Community Services')

@section('content')
    <section class="site-page-hero">
        <div class="site-container">
            <h1 class="site-page-title">Contact us</h1>
            <p class="site-lede">
                Call <a href="tel:+15713906222">571-390-6222</a> or send a message below — we respond to referrals and placement questions as quickly as we can.
            </p>
        </div>
    </section>

    <section class="site-section site-section--form">
        <div class="site-container">
            @if (session('success'))
                <div class="site-alert site-alert--success" role="status">
                    {{ session('success') }}
                </div>
            @endif

            <form class="site-form" method="post" action="{{ route('contact.store') }}" novalidate>
                @csrf
                <div class="site-form__fields">
                    <div class="site-field">
                        <label for="name">Full name</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name">
                        @error('name')
                            <span class="site-field__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="site-field">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="site-field__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="site-field">
                        <label for="phone">Phone <span class="site-optional">(optional)</span></label>
                        <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" autocomplete="tel">
                        @error('phone')
                            <span class="site-field__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="site-field">
                        <label for="message">How can we help?</label>
                        <textarea id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
                        @error('message')
                            <span class="site-field__error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button class="site-btn site-btn--accent site-btn--submit" type="submit">Send message</button>
            </form>
        </div>
    </section>
@endsection
