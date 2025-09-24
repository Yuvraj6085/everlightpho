<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - EverLight</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }

        :root {
            --primary: #2c3e50;
            --secondary: #e74c3c;
            --light: #ecf0f1;
            --dark: #1a252f;
        }

        body { background-color: #f9f9f9; color: #333; line-height: 1.6; }

        header {
            background-color: var(--primary);
            color: white;
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar { display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 0 auto; }
        .logo { font-size: 1.8rem; font-weight: 700; color: white; text-decoration: none; }
        .logo span { color: var(--secondary); }

        .nav-links { display: flex; list-style: none; }
        .nav-links li { margin-left: 2rem; }
        .nav-links a { color: white; text-decoration: none; font-weight: 500; transition: color 0.3s; }
        .nav-links a:hover { color: var(--secondary); }

        .menu-toggle { display: none; font-size: 1.5rem; cursor: pointer; }

        .section { padding: 6rem 2rem 4rem; max-width: 1200px; margin: 0 auto; }
        .section-title { text-align: center; margin-bottom: 3rem; }
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

        .contact { background-color: var(--dark); color: white; }
        .contact-content { display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; }
        .contact-info h3 { margin-bottom: 1.5rem; font-size: 1.5rem; }
        .contact-info p { margin-bottom: 1rem; display: flex; align-items: center; }
        .contact-info i { margin-right: 1rem; color: var(--secondary); }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: none;
            border-radius: 4px;
            background-color: rgba(255,255,255,0.1);
            color: white;
        }
        .contact-form textarea { height: 150px; resize: vertical; }

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
        .contact-form button:hover { background-color: #c0392b; }

        footer { background-color: var(--primary); color: white; text-align: center; padding: 2rem; }
        .social-links { margin-bottom: 1rem; }
        .social-links a { color: white; font-size: 1.5rem; margin: 0 0.5rem; transition: color 0.3s; }
        .social-links a:hover { color: var(--secondary); }

        @media (max-width: 768px) {
            .navbar { flex-direction: column; align-items: flex-start; }
            .nav-links { flex-direction: column; width: 100%; display: none; }
            .nav-links.active { display: flex; }
            .nav-links li { margin: 0.5rem 0; }
            .menu-toggle { display: block; position: absolute; top: 1rem; right: 2rem; }
            .contact-content { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar">
            <a href="{{ route('ever') }}" class="logo">Ever<span>light</span></a>
            <div class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="{{ route('ever') }}">Home</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contact Section -->
    <section class="section contact" id="contact">
        <div class="section-title">
            <h2>Contact Me</h2>
        </div>
        <div class="contact-content">
            <div class="contact-info">
                <h3>Get In Touch</h3>
                <p><i class="fas fa-map-marker-alt"></i> Sri Sai Feather 'n' Splash, Plot No. 142 & 143, K P H B Phase 9, Hyderabad, Telangana 500085</p>
                <p><i class="fas fa-phone"></i> +91 9351608590</p>
                <p><i class="fas fa-envelope"></i> hello@everlight.com</p>
                <p><i class="fas fa-clock"></i> Mon-Fri: 9am-6pm, Sat: 10am-4pm</p>
            </div>
            <div class="contact-form">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
                
                @if(session('success'))
                    <p style="color: green; margin-top: 1rem;">{{ session('success') }}</p>
                @endif
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
    </script>
</body>
</html>
