<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', ['title' => 'About Us'])
    <link rel="stylesheet" href="{{ asset('assets/styles/about.css') }}">
</head>

<body>
    <x-header />

    <main>
        <section class="about-section" id="about">
            <div class="container about-container">
                <div class="about-image">
                    <img src="/assets/images/about-us-illustration.jpg" alt="About FitMetric">
                </div>

                <div class="about-content">
                    <h2 class="section-title">
                        About <span class="about-us-title-brand">Fit<span>Metric</span></span>
                    </h2>
    
                    <p class="about-text">
                        Welcome to <strong>FitMetric</strong>—your companion on the journey to a healthier, more vibrant life.
                    </p>
                    <p class="about-text">
                        At FitMetric, we believe that health and fitness should be accessible to everyone, regardless of their background or starting point.
                        Our mission is to demystify wellness, making it achievable and enjoyable for all.
                    </p>
                    <p class="about-text">
                        Founded with the vision of transforming lives through sustainable habits, FitMetric offers personalized programs
                        that blend physical activity, nutrition, and mental well-being. We understand that each individual's path to health is unique,
                        and we're here to support you every step of the way.
                    </p>
                    <p class="about-text">
                        Whether you're taking your first steps towards fitness or looking to elevate your existing routine, FitMetric provides
                        the tools, guidance, and community to help you succeed. Join us, and let's make healthy living a rewarding and integral part of your life.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <x-footer />
</body>
