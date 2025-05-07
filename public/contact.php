<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Fitness Center - Professional Training & State-of-the-art Facilities">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/styles/globals.css">

    <title>Royal Fitness | Contact Us</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo.png">
</head>

<body>
    <?php include 'components/header.php'?>

    <!-- Contact Section -->
    <section class="contact section" id="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-container grid">
                <form id="contact-form" class="contact-form">
                    <div class="form-group">
                        <input type="text" placeholder="Full Name" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email Address" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <textarea rows="5" placeholder="Your Message" class="form-input" required></textarea>
                    </div>
                    <button type="submit" class="btn contact-btn">Send Message</button>
                </form>
                <div class="contact-info">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Our Location</h4>
                            <p>88 Fitness Street, Gym City</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h4>Call Us</h4>
                            <p>+86 15658089185</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email Us</h4>
                            <p>info@fitmetric.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<script src="/scripts/contact.js"></script>
