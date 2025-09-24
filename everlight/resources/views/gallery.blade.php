<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverLight Gallery</title>
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
        }

        body {
            background-color: #f9f9f9;
            color: #333;
        }

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

        .section {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            margin-top: 80px;
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
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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

        footer {
            background-color: var(--primary);
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
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
                <li><a href="{{ route('ever') }}">Home</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                 <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
            </ul>
        </nav>
    </header>

    <!-- Gallery Section -->
    <section class="section" id="gallery">
        <div class="section-title">
            <!-- <li><a href="{{ route('wedding') }}">wedding</a></li> -->
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
