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
    <link rel="stylesheet" href="/styles/exercises.css">

    <title>FitMetric | Transform Your Body</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo.png">
</head>

<body>
    <?php include 'components/header.php'?>

    <section class="exercises" id="exercises">
        <div class="container">
            <h2 class="section-title">Exercise Programs</h2>
            <div class="exercise-filter">
                <select id="goal-select" class="exercise-filter-select">
                    <option value="lean">Lean Muscle</option>
                    <option value="bulk">Bulking</option>
                    <option value="strength">Strength</option>
                    <option value="endurance">Endurance</option>
                </select>
            </div>
            <div class="exercise-grid grid" id="exercise-container"></div>
        </div>
    </section>

    <?php include 'components/footer.php' ?>
</body>
</html>

<script src='/scripts/exercises.js'></script>
