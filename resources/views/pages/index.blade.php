<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', ['title' => 'Transform Your Body'])
    <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}">
</head>

<body>
    <x-header />

    <main>
        <section class="hero">
            <div class="hero-container grid">
                <div class="hero-content">
                    <h1 class="hero-title">Transform Your Body</h1>
                    <p class="hero-subtitle">Experience world-class training in our premium facilities</p>
                    <div class="hero-cta">
                        <a href="/services/bmi-calculator" class="btn hero-btn">Get Started</a>
                        <a href="#" id="learn-more" class="btn hero-btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer />
</body>
</html>

<script src="{{ asset('assets/scripts/index.js') }}"></script>