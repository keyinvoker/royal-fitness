<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('assets/styles/header.css') }}">

<header class="header">
    <nav class="navbar container">
        <a href="/" class="brand">Fit<span>Metric</span></a>

        <div class="nav-menu" id="nav-menu">
            <ul class="nav-list">
                <li class="nav-item bi-house-door-fill">
                    <a href="/" class="nav-link">Home</a>
                </li>

                <li class="nav-item dropdown bi-person-arms-up">
                    <a href="#" class="nav-link">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="/services/bmi-calculator" class="dropdown-link">
                            BMI Calculator
                        </a></li>
                        <li><a href="/services/exercises" class="dropdown-link">
                            Exercises
                        </a></li>
                    </ul>
                </li>

                <li class="nav-item bi-info-circle-fill">
                    <a href="/about" class="nav-link">About</a>
                </li>

                <li class="nav-item bi-currency-dollar">
                    <a href="/pricing" class="nav-link">Pricing</a>
                </li>

                <li class="nav-item bi-tsunami">
                    <a href="/trainers" class="nav-link">Trainers</a>
                </li>

                <!-- <li class="nav-item bi-book">
                    <a href="/testimonials" class="nav-link">Reviews</a>
                </li> -->

                <li class="">
                    <a href="/contact" class="nav-link cta-button">Join Now</a>
                </li>
            </ul>
            <!-- <div class="nav-close" id="nav-close">
                <i class="fa fa-times"></i>
            </div> -->
        </div>
        <!-- <div class="nav-toggle" id="nav-toggle">
            <i class="fa fa-bars"></i>
        </div> -->
    </nav>
</header>

<script src="{{ asset('assets/scripts/header.js') }}"></script>
