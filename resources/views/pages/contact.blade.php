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
                <form class="contact-form" id="contact-form">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Full Name" class="contact-form-input" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="contact-form-input" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="title" placeholder="Subject" class="contact-form-input" required>
                    </div>
                    <div class="form-group">
                        <textarea rows="5" name="message" placeholder="What would like to say?" class="contact-form-input" required></textarea>
                    </div>
                    <button type="submit" class="btn contact-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <x-footer />
</body>
</html>

<script>
    const emailJsServiceId = @json(config('app.emailjs_service_id'));
    const emailJsTemplateId = @json(config('app.emailjs_template_id'));
    const emailJsPublicKey = @json(config('app.emailjs_public_key'));
</script>
<script src="{{ asset('assets/scripts/contact.js') }}"></script>
