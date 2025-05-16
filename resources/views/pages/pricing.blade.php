<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', ['title' => 'Price'])
    <link rel="stylesheet" href="{{ asset('assets/styles/pricing.css') }}">
</head>

<body>
    <x-header />

    <main>
        <section class="pricing-section">
            <h2 class="title"><span class="highlight">OUR</span> PRICING</h2>

            <p class="subtitle">
                Choose a plan that works for you—no pressure, just progress.
            </p>

            <div class="pricing-cards">
                <div class="card">
                    <h3>BEGINNER</h3>
                    <p class="price">$45<span>/m</span></p>
                    <ul>
                        <li>24h unlimited access</li>
                        <li>Trainer Advice</li>
                        <li class="disabled">Locker + Bathroom</li>
                        <li class="disabled">Personal trainer</li>
                    </ul>
                    <a href="/contact" class="btn">JOIN NOW</a>
                </div>

                <div class="card featured">
                    <h3>EXPERT</h3>
                    <p class="price">$45<span>/m</span></p>
                    <ul>
                        <li>24h unlimited access</li>
                        <li>Trainer Advice</li>
                        <li>Locker + Bathroom</li>
                        <li class="disabled">Personal trainer</li>
                    </ul>
                    <a href="/contact" class="btn">JOIN NOW</a>
                </div>

                <div class="card">
                    <h3>PRO</h3>
                    <p class="price">$45<span>/m</span></p>
                    <ul>
                        <li>24h unlimited access</li>
                        <li>Trainer Advice</li>
                        <li>Locker + Bathroom</li>
                        <li>Personal trainer</li>
                    </ul>
                    <a href="/contact" class="btn">JOIN NOW</a>
                </div>
            </div>
        </section>
    </main>
  <x-footer />
</body>
</html>
