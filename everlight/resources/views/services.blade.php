<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverLight - Services</title>
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

        .service-card p {
            color: #555;
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

    <!-- Services Section -->
    <section class="section services" id="services">
        <div class="section-title">
            <h2>Our Services</h2>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Corporate</h3>
                <p>Professional corporate photography for offices, events, and marketing campaigns.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-camera-retro"></i>
                </div>
                <h3>Portrait Sessions</h3>
                <p>Personalized portrait sessions to capture your personality and style.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Couple</h3>
                <p>Capture love and memories with special couple photoshoots.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Family</h3>
                <p>Professional family sessions to capture precious moments together.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-baby"></i>
                </div>
                <h3>Maternity</h3>
                <p>Beautiful maternity photography to celebrate this special journey.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-baby-carriage"></i>
                </div>
                <h3>Newborn</h3>
                <p>Capture the precious first days of your newborn with gentle, professional photography.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-baby"></i>
                </div>
                <h3>Baby</h3>
                <p>Fun and adorable baby photoshoots to preserve joyful early memories.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-ring"></i>
                </div>
                <h3>Wedding</h3>
                <p>Complete wedding coverage to immortalize every special moment.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-film"></i>
                </div>
                <h3>Prewedding Films</h3>
                <p>Creative prewedding video sessions to tell your love story.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-tshirt"></i>
                </div>
                <h3>Fashion Shoots</h3>
                <p>Professional fashion photography for models, brands, and portfolios.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-edit"></i>
                </div>
                <h3>Editing</h3>
                <p>Professional photo and video editing to enhance every shot to perfection.</p>
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
        <p>&copy; 2025 EverLight. All rights reserved.</p>
    </footer>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
</body>
</html>
0