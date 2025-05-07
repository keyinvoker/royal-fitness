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
    <link rel="stylesheet" href="/styles/contact.css">

    <title>FitMetric | Contact Us</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo.png">
</head>

<body>
    <?php include 'components/header.php'?>

    <section class="contact section" id="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-container grid">
                <form id="contact-form" class="contact-form">
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

    <?php include 'components/footer.php' ?>
</body>
</html>

<script src="/scripts/contact.js"></script>
