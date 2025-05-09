<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Premium Fitness Center - Professional Training & State-of-the-art Facilities">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/styles/globals.css">
  <link rel="stylesheet" href="/styles/trainers.css">

  <title>FitMetric | Our Trainers</title>
  <link rel="icon" type="image/x-icon" href="/assets/images/logo.png">
</head>

<body>
    <?php include 'components/header.php'?>

    <main>
        <section class="trainers-section text-white text-center py-5">
            <div class="container">
                <h2 class="trainers-title">
                    OUR <span>TRAINERS</span>
                </h2>

                <p class="trainers-subtitle">
                    Transform your body.<br/>
                    Only with the best of the best.
                </p>

                <div class="row g-4 justify-content-center">
                    <div class="col-md-4">
                        <div class="trainer-card">
                            <a href="https://www.instagram.com/gian_bowi" target="_blank" class="trainer-card-link">
                                <img src="/assets/images/trainers/gian-bowi.png" alt="Gian Bowi" class="img-fluid w-100">
                            </a>
                            <h5 class="fw-bold mt-3 mb-1 trainer-name">Gian Bowi</h5>
                            <p class="text-secondary">Men Trainer</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="trainer-card">
                            <a href="https://www.instagram.com/ryanshndra" target="_blank" class="trainer-card-link">
                                <img src="/assets/images/trainers/ryanshndra.jpg" alt="ryanshndra" class="img-fluid w-100">
                            </a>
                            <h5 class="fw-bold mt-3 mb-1 trainer-name">ryanshndra</h5>
                            <p class="text-secondary">Best Seller</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="trainer-card">
                            <a href="https://www.instagram.com/zeusidon_" target="_blank" class="trainer-card-link">
                                <img src="/assets/images/trainers/zeusidon.jpg" alt="Zeusidon" class="img-fluid w-100">
                            </a>
                            <h5 class="fw-bold mt-3 mb-1 trainer-name">Zeusidon</h5>
                            <p class="text-secondary">Men Trainer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php' ?>
</body>
</html>
