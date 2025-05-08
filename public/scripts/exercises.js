// TODO: Refactor into using DB table to fetch data
const exercisePrograms = {
    lean: [
        {
            name: "HIIT Training",
            desc: "High-intensity interval training for fat loss and lean muscle",
            video: "",//"https://www.youtube.com/embed/MLSSn2h9Cw8",
            duration: "30 mins",
            equipment: "Bodyweight"
        },
        {
            name: "Circuit Training",
            desc: "Full-body workout combining strength and cardio",
            video: "",//"https://www.youtube.com/embed/eGgDlEeN8DY",
            duration: "45 mins",
            equipment: "Dumbbells"
        }
    ],
    bulk: [
        {
            name: "Deadlifts",
            desc: "Compound exercise for overall muscle growth",
            video: "",//"https://www.youtube.com/embed/op9kVnSso6Q",
            duration: "45 mins",
            equipment: "Barbell"
        },
        {
            name: "Bench Press",
            desc: "Upper body strength building exercise",
            video: "",//"https://www.youtube.com/embed/4Y2ZdHCOXok",
            duration: "45 mins",
            equipment: "Bench Press"
        }
    ],
    strength: [
        {
            name: "Powerlifting",
            desc: "Focus on maximal strength development",
            video: "",//"https://www.youtube.com/embed/8AoeUCf7xfI",
            duration: "60 mins",
            equipment: "Power Rack"
        },
        {
            name: "Kettlebell Swings",
            desc: "Develop explosive hip power",
            video: "",//"https://www.youtube.com/embed/mKDIuUbH94Q",
            duration: "30 mins",
            equipment: "Kettlebell"
        }
    ],
    endurance: [
        {
            name: "Long-Distance Running",
            desc: "Improve cardiovascular endurance",
            video: "",//"https://www.youtube.com/embed/5umbfHn_mgA",
            duration: "60 mins",
            equipment: "Treadmill"
        },
        {
            name: "Rowing Machine Workouts",
            desc: "Full-body endurance training",
            video: "",//"https://www.youtube.com/embed/8S6dE1VjH40",
            duration: "45 mins",
            equipment: "Rowing Machine"
        }
    ]
};

// Exercise Program Filter
document.getElementById('goal-select').addEventListener('change', (e) => {
    const goal = e.target.value;
    const container = document.getElementById('exercise-container');
    
    container.innerHTML = exercisePrograms[goal].map(ex => `
        <div class="exercise-card">
            <div class="exercise-header">
                <h3>${ex.name}</h3>
                <div class="exercise-meta">
                    <span>${ex.duration}</span>
                    <span>${ex.equipment}</span>
                </div>
            </div>
            <p class="exercise-desc">${ex.desc}</p>
            <div class="exercise-video-container">
                <iframe src="${ex.video}" 
                        loading="lazy"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    `).join('');
});

// Initialize default exercises
document.getElementById('goal-select').dispatchEvent(new Event('change'));
