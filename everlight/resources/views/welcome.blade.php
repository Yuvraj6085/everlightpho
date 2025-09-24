<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverLight</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #2c3e50;
            --secondary: #e74c3c;
            --light: #ecf0f1;
            --dark: #1a252f;
            --gray: #95a5a6;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: var(--primary);
            color: white;
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
        }

        .logo span {
            color: var(--secondary);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--secondary);
        }

        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://wallpapers.com/images/featured/most-beautiful-nature-hdb30wtkjbn08xlf.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 0 1rem;
            margin-top: 70px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
        }

        .btn {
            display: inline-block;
            background-color: var(--secondary);
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #c0392b;
        }

        .section {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            position: relative;
            display: inline-block;
            padding-bottom: 0.5rem;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 70px;
            height: 3px;
            background-color: var(--secondary);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            height: 250px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(44, 62, 80, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.5s;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .overlay-content {
            text-align: center;
            color: white;
        }

        .overlay-content h3 {
            margin-bottom: 0.5rem;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .about-text p {
            margin-bottom: 1.5rem;
            color: #555;
        }

        .about-image {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .services {
            background-color: var(--light);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            font-size: 3rem;
            color: var(--secondary);
            margin-bottom: 1.5rem;
        }

        .service-card h3 {
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .contact {
            background-color: var(--dark);
            color: white;
        }

        .contact .section-title h2 {
            color: white;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info h3 {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .contact-info p {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .contact-info i {
            margin-right: 1rem;
            color: var(--secondary);
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: none;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .contact-form textarea {
            height: 150px;
            resize: vertical;
        }

        .contact-form button {
            background-color: var(--secondary);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #c0392b;
        }

        footer {
            background-color: var(--primary);
            color: white;
            text-align: center;
            padding: 2rem;
        }

        .social-links {
            margin-bottom: 1rem;
        }

        .social-links a {
            color: white;
            font-size: 1.5rem;
            margin: 0 0.5rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: var(--secondary);
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links {
                flex-direction: column;
                width: 100%;
                display: none;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                margin: 0.5rem 0;
            }

            .menu-toggle {
                display: block;
                position: absolute;
                top: 1rem;
                right: 2rem;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .about-content,
            .contact-content {
                grid-template-columns: 1fr;
            }

            .gallery {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar">
            <a href="#" class="logo">Ever<span>light</span></a>
            <div class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                 <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
               
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1></h1>
            <p>Capturing life’s milestones, from the quiet intimacy of portraits to the grandeur of major events, with imagery that tells your story in every detail.</p>

            
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="section" id="gallery">
        <div class="section-title">
            <h2> Gallery</h2>
        </div>
        <div class="gallery">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Portrait Photography">
                <div class="overlay">
                    <div class="overlay-content">
                        <li><a href="{{ route('portrait') }}">portrait</a></li>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1520637836862-4d197d17c935?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Wedding Photography">
                <div class="overlay">
                    <div class="overlay-content">
                        <li><a href="{{ route('wedding') }}">wedding</a></li>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1551963831-b3b1ca40c98e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Nature Photography">
                <div class="overlay">
                    <div class="overlay-content">
                         <li><a href="{{ route('nature') }}">nature</a></li>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Event Photography">
                <div class="overlay">
                    <div class="overlay-content">
                            <li><a href="{{ route('eveny') }}">eveny</a></li>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Commercial Photography">
                <div class="overlay">
                    <div class="overlay-content">
                      <li><a href="{{ route('commercial') }}">commercial</a></li>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Travel Photography">
                <div class="overlay">
                    <div class="overlay-content">
                      <li><a href="{{ route('travel') }}">travel</a></li>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="section-title">
            <h2>About Me</h2>
        </div>
        <div class="about-content">
            <div class="about-text">
                <h3>Capturing Moments That Last a Lifetime</h3>
                <p>Hello! I'm Alex, a professional photographer with over 10 years of experience specializing in portrait, wedding, and commercial photography. My passion is to capture authentic emotions and transform them into timeless visual stories.</p>
                <p>I believe that every photograph tells a story, and my goal is to tell yours in the most beautiful and authentic way possible. With an eye for detail and a passion for creativity, I strive to create images that you'll cherish forever.</p>
                <a href="#contact" class="btn">Get in Touch</a>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Photographer">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services" id="services">
        <div class="section-title">
            <h2>My Services</h2>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <h3>Portrait Photography</h3>
                <p>Professional portrait sessions for individuals, couples, and families. Perfect for capturing special moments and milestones.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-ring"></i>
                </div>
                <h3>Wedding Photography</h3>
                <p>Comprehensive wedding coverage to capture every precious moment of your special day, from preparation to reception.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Commercial Photography</h3>
                <p>High-quality product and corporate photography to enhance your brand's visual identity and marketing materials.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact" id="contact">
        <div class="section-title">
            <h2>Contact Me</h2>
        </div>
        <div class="contact-content">
            <div class="contact-info">
                <h3>Get In Touch</h3>
                <p><i class="fas fa-map-marker-alt"></i>Sri Sai Feather 'n' Splash, Plot No. 142 & 143, Swimming Pool Road, Gopal Nagar, Anshi Enclave, K P H B Phase 9, Kukatpally, Hyderabad, Telangana 500085 </p>
                <p><i class="fas fa-phone"></i> +91 9351608590</p>
                <p><i class="fas fa-envelope"></i> hello@everlight.com</p>
                <p><i class="fas fa-clock"></i> Mon-Fri: 9am-6pm, Sat: 10am-4pm</p>
            </div>
            <div class="contact-form">
                <form>
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="text" placeholder="Subject" required>
                    <textarea placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
        <p>&copy; 2023 EverLight. All rights reserved.</p>
    </footer>

    <script>
        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu after clicking a link
                    if(navLinks.classList.contains('active')) {
                        navLinks.classList.remove('active');
                    }
                }
            });
        });
    </script>
</body>
</html>