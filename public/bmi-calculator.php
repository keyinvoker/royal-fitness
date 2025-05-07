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
    <link rel="stylesheet" href="/styles/bmi-calculator.css">

    <title>Royal Fitness | BMI Calculator</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo.png">
</head>

<body>
    <?php include 'components/header.php'?>

    <section class="bmi section" id="bmi">
        <div class="container">
            <h2 class="section-title">BMI Calculator</h2>
            <div class="bmi-container grid">
                <div class="bmi-form">
                    <div class="form-group">
                        <label for="height">Height (cm)</label>
                        <input type="number" id="height" class="form-input" min="100" required>
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight (kg)</label>
                        <input type="number" id="weight" class="form-input" min="30" required>
                    </div>
                    <button class="btn bmi-btn" onclick="calculateBMI()">Calculate BMI</button>
                    <div id="bmi-result" class="result">
                        <div class="bmi-meter"></div>
                        <div class="bmi-info-text"></div>
                    </div>
                </div>

                <div class="bmi-info">
                    <h3>BMI Categories</h3>
                    <ul class="bmi-categories">
                        <li class="underweight">
                            <span class="category">Underweight:</span>
                            &lt; 18.5
                        </li>
                        <li class="normal">
                            <span class="category">Normal:</span>
                            18.5 - 24.9
                        </li>
                        <li class="overweight">
                            <span class="category">Overweight:</span>
                            25 - 29.9
                        </li>
                        <li class="obese">
                            <span class="category">Obese:</span>
                            &ge; 30
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="/scripts/bmi-calculator.js"></script>
