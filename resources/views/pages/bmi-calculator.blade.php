<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', ['title' => 'BMI Calculator'])
    <link rel="stylesheet" href="{{ asset('assets/styles/bmi-calculator.css') }}">
</head>

<body>
    <x-header />

    <main>
        <h2 class="section-title">BMI Calculator</h2>

        <section class="bmi" id="bmi">
            <div class="container">
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
                        <button class="btn bmi-btn" onclick="calculateBMI()">Calculate</button>
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
    </main>

    <x-footer />
</body>

<script src="{{ asset('assets/scripts/bmi-calculator.js') }}"></script>
