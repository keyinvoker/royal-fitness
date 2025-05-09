# Project Tree
```
royal-fitness
├─ README.md
├─ app
│  ├─ Controllers
│  │  └─ ExerciseController.php
│  ├─ Database
│  │  └─ MySQL.php
│  ├─ Models
│  │  └─ Exercise.php
│  └─ Repositories
│     └─ ExerciseRepository.php
├─ public
│  ├─ about.php
│  ├─ assets
│  │  └─ images
│  │     ├─ about-us-illustration.jpg
│  │     ├─ bodybuilding-illustration.jpg
│  │     ├─ contact-us-banner.jpg
│  │     ├─ hero-bg.jpg
│  │     └─ logo.png
│  ├─ bmi-calculator.php
│  ├─ components
│  │  ├─ footer.php
│  │  └─ header.php
│  ├─ contact.php
│  ├─ exercises.php
│  ├─ index.php
│  ├─ scripts
│  │  ├─ bmi-calculator.js
│  │  ├─ contact.js
│  │  ├─ exercises.js
│  │  └─ header.js
│  ├─ services.php
│  └─ styles
│     ├─ about.css
│     ├─ bmi-calculator.css
│     ├─ contact.css
│     ├─ exercises.css
│     ├─ footer.css
│     ├─ globals.css
│     ├─ header.css
│     └─ index.css
└─ routes.php

```

# Steps to Run
```
php -S localhost:5501 -t public routes.php
```

# Database
Create a MySQL database called `fitmetric` if not yet done: `CREATE DATABASE fitmetric;`.

Then, run these scripts.
```sql
CREATE TABLE IF NOT EXISTS exercise_types (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	description TEXT
);

CREATE TABLE IF NOT EXISTS equipments (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	description TEXT
);

CREATE TABLE IF NOT EXISTS exercises (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	description TEXT,
	video_url VARCHAR(255),
	duration_minutes INT,
	equipment_id INT,
	type_id INT,
	FOREIGN KEY (equipment_id) REFERENCES equipments(id),
	FOREIGN KEY (type_id) REFERENCES exercise_types(id)
);
```

```sql
INSERT INTO equipments (name) VALUES
	('Bodyweight'),
	('Dumbbells'),
	('Barbell'),
	('Bench Press'),
	('Power Rack'),
	('Kettlebell'),
	('Treadmill'),
	('Rowing Machine')
;


INSERT INTO exercise_types (name) VALUES
	('lean'),
	('bulk'),
	('strength'),
	('endurance')
;

INSERT INTO exercises (name, description, video_url, duration_minutes, equipment_id, type_id) VALUES
	('HIIT Training', 'High-intensity interval training for fat loss and lean muscle', 'https://www.youtube.com/embed/MLSSn2h9Cw8', 30, 1, 1),
	('Circuit Training', 'Full-body workout combining strength and cardio', 'https://www.youtube.com/embed/eGgDlEeN8DY', 45, 2, 1),
	('Deadlifts', 'Compound exercise for overall muscle growth', 'https://www.youtube.com/embed/op9kVnSso6Q', 45, 3, 2),
	('Bench Press', 'Upper body strength building exercise', 'https://www.youtube.com/embed/4Y2ZdHCOXok', 45, 4, 2),
	('Powerlifting', 'Focus on maximal strength development', 'https://www.youtube.com/embed/8AoeUCf7xfI', 60, 5, 3),
	('Kettlebell Swings', 'Develop explosive hip power', 'https://www.youtube.com/embed/mKDIuUbH94Q', 30, 6, 3),
	('Long-Distance Running', 'Improve cardiovascular endurance', 'https://www.youtube.com/embed/5umbfHn_mgA', 60, 7, 4),
	('Rowing Machine Workouts', 'Full-body endurance training', 'https://www.youtube.com/embed/8S6dE1VjH40', 45, 8, 4)
;
```
