document.addEventListener('DOMContentLoaded', () => {
    // Mobile Navigation
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    const navClose = document.getElementById('nav-close');

    // Toggle Mobile Menu
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    navClose.addEventListener('click', () => {
        navMenu.classList.remove('active');
        document.body.style.overflow = 'auto';
    });

    // Close menu on outside click
    document.addEventListener('click', (e) => {
        if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
            navMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });

    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });

    // Close mobile menu on link click
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    });
});

// Exercise Programs Data
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
            <div class="video-container">
                <iframe src="${ex.video}" 
                        loading="lazy"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    `).join('');
});

// Contact Form Submission
document.getElementById('contact-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const formData = new FormData(e.target);
    const data = {
        name: formData.get('name'),
        email: formData.get('email'),
        message: formData.get('message')
    };

    try {
        // Simulate API call
        await new Promise(resolve => setTimeout(resolve, 1000));
        
        showNotification('Message sent successfully! We will respond shortly.', 'success');
        e.target.reset();
    } catch (error) {
        showNotification('Failed to send message. Please try again.', 'error');
    }
});

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Initialize default exercises
document.getElementById('goal-select').dispatchEvent(new Event('change'));