// Function to fetch exercises based on the exercise type
async function fetchExercises(exerciseType) {
    try {
        const res = await fetch(`${exercisesUrl}?exercise_type=${exerciseType}`);
        if (!res.ok) {
            throw new Error('Failed to fetch exercises');
        }
        const data = await res.json();
        return data.data.items || [];
    } catch (error) {
        console.error(error);
        return [];
    }
}

// Function to render the exercise cards
function renderExercises(exercises) {
    const container = document.getElementById('exercise-container');
    container.innerHTML = exercises.map(exercise => `
        <div class="exercise-card">
            <div class="exercise-header">
                <h3>${exercise.name}</h3>
                <div class="exercise-meta">
                    <span>${exercise.duration_minutes} mins</span>
                    <span>${exercise.equipment}</span>
                </div>
            </div>
            <p class="exercise-desc">${exercise.description}</p>
            <div class="exercise-video-container">
                <iframe
                    src="${exercise.video_url || ''}" 
                    loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen
                >
                </iframe>
            </div>
        </div>
    `).join('');
}

// Event listener to handle the exercise type change
document.getElementById('goal-select').addEventListener('change', async (e) => {
    const exerciseType = e.target.value;
    const exercises = await fetchExercises(exerciseType);
    renderExercises(exercises);
});

// Trigger initial load
document.getElementById('goal-select').dispatchEvent(new Event('change'));







// async function fetchExercises(exerciseType, offset = 0, limit = 10) {
//     const url = `{{ route('api.exercises') }}`;

//     $.ajax({
//         url: url,
//         method: 'GET',
//         data: {
//             exercise_type: exerciseType,
//             offset: offset,
//             limit: limit,
//         },
//         success: function(response) {
//             renderExercises(response.data);
//             renderExercisesPagination(response.data);
//         },
//         error: function(xhr, status, error) {
//             console.error(`Error fetching exercises: ${status} | ${error}`);
//             alert(`Failed fetching data: ${error}`);
//         }
//     })
// }

// function renderExercises(exercises) {
//     const container = document.getElementById('exercise-container');
//     container.innerHTML = exercises.map(exercise => `
//         <div class="exercise-card">
//             <div class="exercise-header">
//                 <h3>${exercise.name}</h3>
//                 <div class="exercise-meta">
//                     <span>${exercise.duration_minutes} mins</span>
//                     <span>${exercise.equipment}</span>
//                 </div>
//             </div>
//             <p class="exercise-desc">${exercise.description}</p>
//             <div class="exercise-video-container">
//                 <iframe src="${exercise.video_url || ''}" 
//                         loading="lazy"
//                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
//                         allowfullscreen>
//                 </iframe>
//             </div>
//         </div>
//     `).join('');
// }

// // Event listener to handle the exercise type change
// document.getElementById('goal-select').addEventListener('change', async (e) => {
//     const exerciseType = e.target.value;
//     const exercises = await fetchExercises(exerciseType);
//     // renderExercises(exercises);
// });

// // Trigger initial load
// // document.getElementById('goal-select').dispatchEvent(new Event('change'));
// $(document).ready(function() {
//     fetchExercises();
// });
