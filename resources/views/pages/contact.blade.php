<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', ['title' => 'Contact Us'])
    <link rel="stylesheet" href="{{ asset('assets/styles/contact.css') }}">
</head>

<body>
    <x-header />

    <section class="contact section" id="contact">
        <div class="container">

            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-container">
                <form class="contact-form">
                    <div class="form-group">
                        <input type="text" placeholder="Full Name" class="contact-form-input" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" class="contact-form-input" required>
                    </div>
                    <div class="form-group">
                        <textarea rows="5" placeholder="What would like to say?" class="contact-form-input" required></textarea>
                    </div>
                    <button type="submit" class="btn contact-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <x-footer />
</body>
</html>

<script src="/scripts/contact.js"></script>
