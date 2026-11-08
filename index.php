<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CampusVibe | Campus Events</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<!-- NAVIGATION BAR -->
<header>

    <nav class="navbar">

        <h2 class="logo">Campus<span>Vibe</span></h2>

        <ul class="nav-links">

            <li><a href="#home">Home</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>

        </ul>

    </nav>

</header>


<!-- HOME SECTION -->
<section id="home" class="hero">

    <div class="hero-content">

        <h1>Discover What's Happening on Campus!</h1>

        <p>
            Your one-stop platform for discovering campus events,
            connecting with students and making unforgettable memories.
        </p>

        <a href="#events" class="btn">Explore Events</a>

    </div>

</section>


<!-- EVENTS SECTION -->
<section id="events" class="events-section">

    <h2>Upcoming Events</h2>

    <p class="section-description">
        Find exciting events happening around your campus.
    </p>


    <!-- SEARCH AND FILTER -->
    <div class="event-controls">

        <input
            type="text"
            id="searchInput"
            placeholder="Search for an event..."
        >

        <select id="categoryFilter">

            <option value="all">All Categories</option>
            <option value="music">Music</option>
            <option value="sports">Sports</option>
            <option value="academic">Academic</option>
            <option value="social">Social</option>

        </select>

    </div>


    <!-- EVENT CARDS -->
    <div class="event-container" id="eventContainer">


        <!-- EVENT 1 -->
        <div class="event-card" data-category="music">

            <img
                src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=600"
                alt="Music Concert"
            >

            <div class="event-info">

                <span class="category">Music</span>

                <h3>Campus Music Night</h3>

                <p>
                    Enjoy an evening filled with music,
                    entertainment and amazing performances.
                </p>

                <p><strong>Date:</strong> 20th November 2026</p>

                <p><strong>Venue:</strong> Main Campus Grounds</p>

                <button class="rsvp-btn" data-event="Campus Music Night">
                    Register Now
                </button>

            </div>

        </div>


        <!-- EVENT 2 -->
        <div class="event-card" data-category="sports">

            <img
                src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=600"
                alt="Sports Event"
            >

            <div class="event-info">

                <span class="category">Sports</span>

                <h3>Inter-Campus Sports Day</h3>

                <p>
                    Come support your teams in an exciting
                    day of sports and competition.
                </p>

                <p><strong>Date:</strong> 25th November 2026</p>

                <p><strong>Venue:</strong> University Sports Field</p>

                <button class="rsvp-btn" data-event="Inter-Campus Sports Day">
                    Register Now
                </button>

            </div>

        </div>


        <!-- EVENT 3 -->
        <div class="event-card" data-category="academic">

            <img
                src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600"
                alt="Academic Conference"
            >

            <div class="event-info">

                <span class="category">Academic</span>

                <h3>Technology Innovation Forum</h3>

                <p>
                    Discover new technologies, share ideas
                    and connect with industry experts.
                </p>

                <p><strong>Date:</strong> 2nd December 2026</p>

                <p><strong>Venue:</strong> Main Auditorium</p>

                <button class="rsvp-btn" data-event="Technology Innovation Forum">
                    Register Now
                </button>

            </div>

        </div>


        <!-- EVENT 4 -->
        <div class="event-card" data-category="social">

            <img
                src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=600"
                alt="Social Event"
            >

            <div class="event-info">

                <span class="category">Social</span>

                <h3>Freshers Welcome Party</h3>

                <p>
                    Meet new friends and enjoy an unforgettable
                    campus experience.
                </p>

                <p><strong>Date:</strong> 5th December 2026</p>

                <p><strong>Venue:</strong> Student Centre</p>

                <button class="rsvp-btn" data-event="Freshers Welcome Party">
                    Register Now
                </button>

            </div>

        </div>


    </div>

    <p id="noEvents" class="no-events">No events found.</p>

</section>


<!-- REGISTRATION POPUP -->
<div id="registrationModal" class="modal">

    <div class="modal-content">

        <span class="close-btn" id="closeModal">&times;</span>

        <h2>Event Registration</h2>

        <p id="selectedEvent"></p>

        <form id="registrationForm">

            <input
                type="text"
                name="full_name"
                placeholder="Full Name"
                required
            >

            <input
                type="text"
                name="registration_number"
                placeholder="Student Registration Number"
                required
            >

            <input
                type="email"
                name="email"
                placeholder="Email Address"
                required
            >

            <input
                type="tel"
                name="phone"
                placeholder="Phone Number"
                required
            >

            <input
                type="hidden"
                name="event_name"
                id="eventName"
            >

            <button type="submit" class="btn">
                Submit Registration
            </button>

        </form>

        <p id="registrationMessage"></p>

    </div>

</div>


<!-- ABOUT SECTION -->
<section id="about" class="about-section">

    <div class="about-content">

        <h2>About CampusVibe</h2>

        <p>
            CampusVibe is a student-focused platform created
            to make discovering campus events easier and more exciting.

            Whether you love music, sports, academic activities
            or social gatherings, CampusVibe helps you stay
            informed about what's happening around your campus.

            Our goal is to bring students together through
            meaningful campus experiences.
        </p>

    </div>

</section>


<!-- CONTACT SECTION -->
<section id="contact" class="contact-section">

    <h2>Get In Touch</h2>

    <p>Have questions or want to share an event with us?</p>

    <form id="contactForm">

        <input
            type="text"
            name="name"
            placeholder="Your Name"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Your Email"
            required
        >

        <input
            type="text"
            name="subject"
            placeholder="Subject"
            required
        >

        <textarea
            name="message"
            placeholder="Your Message"
            required
        ></textarea>

        <button type="submit" class="btn">
            Send Message
        </button>

    </form>

    <p id="contactMessage"></p>

</section>


<!-- FOOTER -->
<footer>

    <h3>CampusVibe</h3>

    <p>Connecting Students Through Events.</p>

    <p>&copy; 2026 CampusVibe. All Rights Reserved.</p>

</footer>


<script src="script.js"></script>

</body>

</html>