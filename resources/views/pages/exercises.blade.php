<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', ['title' => 'Exercise Programs'])
    <link rel="stylesheet" href="{{ asset('assets/styles/exercises.css') }}">
</head>

<body>
    <x-header />

    <main>
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

                <div class="exercise-grid grid" id="exercise-container">
                    {{-- Rendered by Ajax --}}
                </div>
            </div>
        </section>
    </main>

    <x-footer />
</body>
</html>

<script>
    const exercisesUrl = @json(route('api.exercises'));
</script>
<script src={{ asset('assets/scripts/exercises.js') }}></script>
