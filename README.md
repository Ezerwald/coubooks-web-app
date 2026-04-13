# CouBooks

A full-stack web application for university students to browse and reserve
study books for their courses. Built across two lab sessions as part of the
Software Engineering & Web Technologies course at KU Leuven (Spring 2026).

> Note: This is a coursework project. Book reservation is interface-only —
> no real purchasing or payment processing is implemented.

---

## Features

### Frontend
- Multi-page responsive website: Index, Courses, Reservation, Feedback, About
- Semantic HTML5 structure (`<header>`, `<main>`, `<section>`, `<aside>`, `<footer>`)
- CSS flexbox layout with media query breakpoints (768px tablet, 600px mobile)
- Dynamic welcome message on index page via PHP controller

### Backend
- PHP 8 backend with MVC-style architecture
- PDO-based MySQL data models with ORM-like pattern:
  - Getters/setters
  - `save()` method for INSERT operations
  - Static `getAll()` methods for SELECT queries
- Server-side session management (`$_SESSION`) for stateful multi-step form flow

### Key Functionality
- **3-Step Reservation Wizard** — collects student identity, study phase, and
  book selection across separate pages using PHP session persistence; commits
  full reservation to MySQL on final step
- **Live Feedback System** — users submit feedback via form; submissions stored
  in MySQL and dynamically fetched and rendered on the index page on each load
- **Dynamic Course & Book Catalogue** — course and book data fetched from
  MySQL and rendered server-side on the Courses page

---

## Tech Stack

| Layer | Technology |
|---|---|
| Frontend | HTML5, CSS3 (Flexbox, Media Queries), JavaScript |
| Backend | PHP 8 |
| Database | MySQL (PDO) |
| IDE | IntelliJ IDEA Ultimate |
| Version Control | Git (KU Leuven GitLab) |

---

## Database Schema

The `coubooks` MySQL database contains the following tables:

- `feedback` — user-submitted feedback (id, author, message, timestamp)
- `course` — available university courses
- `book` — books associated with courses
- `student` — student information collected during reservation
- `reservation` — completed reservations linking students to books

---

## Architecture

The backend follows a lightweight MVC-style pattern:
```
Controllers (PHP classes)
├── Greeter — generates dynamic welcome messages
└── Shop — manages reservation wizard state and session flow
```
```
Data Models (PHP classes with PDO)
├── Feedback — maps to feedback table; handles save() and getAll()
├── Course — maps to course table
├── Book — maps to book table
└── Reservation — maps to reservation table; persisted on wizard completion
```

Each data model class handles its own database interaction via a shared PDO
connection object, following a pattern close to the Active Record approach.

---

## Running the Project

### Prerequisites
- PHP 8+ (non-thread-safe build)
- MySQL Community Server
- IntelliJ IDEA Ultimate (or any PHP-capable IDE)

### Steps
1. Setup MySQL Database
2. Configure Database Connection
3. Start PHP Server
```bash
cd path/to/coubooks
php -S localhost:8080
```
Then open `http://localhost:8080` in your browser.

---

## Pages

| Page | Path | Description |
|---|---|---|
| Index | `/index.php` | Landing page with dynamic greeting and live user feedback (includes form for feedback submission)|
| Courses | `/courses.php` | Dynamically rendered course and book catalogue (not implemented yet) |
| Reservation | `/reservation.php` | 3-step wizard for booking course books |
| About | `/about.php` | About info |
