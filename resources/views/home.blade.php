<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HopeBridge Community Services | Stability, Dignity, Independence</title>
    <style>
        :root {
            --primary: #0f4c5c;
            --accent: #f4a261;
            --dark: #1f2937;
            --light: #f8fafc;
            --muted: #6b7280;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--dark);
            background: #ffffff;
            line-height: 1.6;
        }

        .container {
            width: min(1100px, 92%);
            margin: 0 auto;
        }

        .topbar {
            background: var(--primary);
            color: white;
            font-size: 0.95rem;
            padding: 0.65rem 0;
            text-align: center;
        }

        header {
            border-bottom: 1px solid #e5e7eb;
            background: #ffffff;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            padding: 1rem 0;
        }

        .logo {
            font-weight: 700;
            letter-spacing: 0.4px;
            color: var(--primary);
            font-size: 1.25rem;
            text-decoration: none;
        }

        nav a {
            color: var(--dark);
            text-decoration: none;
            margin-left: 1rem;
            font-weight: 600;
            font-size: 0.95rem;
        }

        nav a:hover {
            color: var(--primary);
        }

        .hero {
            background: linear-gradient(135deg, #f0f9ff, #ffffff 60%);
            padding: 5.5rem 0 4.5rem;
        }

        .hero h1 {
            font-size: clamp(2rem, 5vw, 3.2rem);
            line-height: 1.2;
            margin: 0 0 1rem;
            color: #0b2f3a;
            max-width: 780px;
        }

        .hero p {
            max-width: 780px;
            color: #374151;
            font-size: 1.05rem;
            margin: 0 0 1.5rem;
        }

        .btn {
            display: inline-block;
            background: var(--accent);
            color: #1f2937;
            text-decoration: none;
            font-weight: 700;
            padding: 0.85rem 1.3rem;
            border-radius: 8px;
            margin-right: 0.6rem;
        }

        .btn.secondary {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        section {
            padding: 4rem 0;
        }

        .section-title {
            margin: 0 0 0.8rem;
            color: #0b2f3a;
            font-size: 1.9rem;
        }

        .section-copy {
            color: var(--muted);
            max-width: 760px;
            margin: 0 0 2rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1rem;
        }

        .card {
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 1rem 1rem 1.1rem;
        }

        .card h3 {
            margin: 0 0 0.4rem;
            color: var(--primary);
            font-size: 1.05rem;
        }

        .card p {
            margin: 0;
            color: #4b5563;
            font-size: 0.95rem;
        }

        .mission {
            background: #0f4c5c;
            color: white;
            border-radius: 16px;
            padding: 2rem;
        }

        .mission p {
            margin: 0.4rem 0 0;
            max-width: 760px;
            color: #dbeafe;
        }

        footer {
            border-top: 1px solid #e5e7eb;
            padding: 2.5rem 0;
            color: #6b7280;
            font-size: 0.95rem;
            background: #f9fafb;
        }

        @media (max-width: 860px) {
            .nav {
                align-items: flex-start;
                flex-direction: column;
            }

            nav a {
                margin: 0 0.75rem 0.5rem 0;
                display: inline-block;
            }
        }
    </style>
</head>
<body>
    <div class="topbar">HopeBridge Community Services - Building bridges to stability, dignity, and independence.</div>

    <header>
        <div class="container nav">
            <a class="logo" href="{{ url('/') }}">HopeBridge Community Services</a>
            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/our-care') }}">Our Care</a>
                <a href="{{ url('/demographics-served') }}">Demographics Served</a>
                <a href="{{ url('/about-us') }}">About Us</a>
                <a href="{{ url('/contact-us') }}">Contact Us</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Services and programs for seniors, veterans, disabled, and other special needs populations.</h1>
                <p>
                    HopeBridge Community Services provides affordable, all-inclusive housing support focused on stability and long-term progress.
                    Where hope meets opportunity, we support every step forward with safe and dependable care.
                </p>
                <a class="btn" href="#contact">Referral Form</a>
                <a class="btn secondary" href="#mission">Our Mission</a>
            </div>
        </section>

        <section id="demographics">
            <div class="container">
                <h2 class="section-title">Demographics Served</h2>
                <p class="section-copy">
                    Since opening our first home, we have expanded support for multiple communities in need of affordable,
                    quality housing and structured care.
                </p>
                <div class="grid">
                    <div class="card"><h3>Disabled Adults</h3><p>Accessible and supportive daily living environments.</p></div>
                    <div class="card"><h3>Veterans</h3><p>Stable housing options with care-centered coordination.</p></div>
                    <div class="card"><h3>Seniors</h3><p>Comfort-focused homes designed for long-term support.</p></div>
                    <div class="card"><h3>Sober Living</h3><p>Structured spaces for recovery and healthier routines.</p></div>
                    <div class="card"><h3>Transitional Housing</h3><p>Temporary stability while planning next-stage housing.</p></div>
                    <div class="card"><h3>Re-Entry and Low Income</h3><p>Affordable, safe housing with practical guidance.</p></div>
                </div>
            </div>
        </section>

        <section id="care">
            <div class="container">
                <h2 class="section-title">Our Care</h2>
                <p class="section-copy">
                    Our properties are built around safety, affordability, and inclusion. Every resident receives support through
                    clean housing, resource coordination, and respectful service.
                </p>
                <div class="grid">
                    <div class="card"><h3>All-Inclusive Living</h3><p>Housing plans designed to reduce barriers and stress.</p></div>
                    <div class="card"><h3>Referral-Based Intake</h3><p>Simple referral process for individuals and agencies.</p></div>
                    <div class="card"><h3>Community-Centered</h3><p>Homes that promote belonging, growth, and stability.</p></div>
                </div>
            </div>
        </section>

        <section id="mission">
            <div class="container mission">
                <h2>Our Mission</h2>
                <p>
                    Building bridges to stability, dignity, and independence. Where hope meets opportunity. Supporting every step forward.
                </p>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <h2 class="section-title">About HopeBridge Community Services</h2>
                <p class="section-copy">
                    HopeBridge Community Services is dedicated to helping individuals and families access safe, quality, and affordable housing support.
                    The site is ready for additional features such as a database-backed referral form, admin dashboard, and CMS editing.
                </p>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <h2 class="section-title">Contact Us</h2>
                <p class="section-copy">
                    For more information, call <strong>571-390-6222</strong>. You can also connect with us to submit referrals and discuss placement options.
                </p>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <strong>HopeBridge Community Services</strong> - Where hope meets opportunity
        </div>
    </footer>
</body>
</html>
