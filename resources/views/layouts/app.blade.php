<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComicVerse - Your Digital Comic Universe</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        /* Header Styles */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: #667eea;
            transform: translateY(-2px);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(45deg, #667eea, #764ba2);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        .hero-section {
            text-align: center;
            margin-bottom: 4rem;
        }

        .hero-title {
            font-size: 3.5rem;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.2s both;
        }

        /* Comics Grid */
        .comics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .comic-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
            cursor: pointer;
            backdrop-filter: blur(10px);
        }

        .comic-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .comic-thumbnail {
            width: 100%;
            height: 200px;
            background: linear-gradient(45deg, #ff6b6b, #feca57, #48dbfb, #ff9ff3);
            background-size: 400% 400%;
            animation: gradientShift 8s ease-in-out infinite;
            position: relative;
            overflow: hidden;
        }

        .comic-thumbnail::before {
            content: '📚';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            opacity: 0.7;
        }

        .comic-info {
            padding: 1.5rem;
        }

        .comic-title {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .comic-author {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0.8rem;
        }

        .comic-description {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .comic-stats {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
            color: #666;
        }

        .genre-tag {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Footer */
        .footer {
            background: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 2rem 0;
            backdrop-filter: blur(10px);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #667eea;
        }

        .copyright {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .comics-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav-container">
            <div class="logo">ComicVerse</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#genres">Genres</a></li>
                <li><a href="#trending">Trending</a></li>
                <li><a href="#new">New Releases</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-links">
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
                <a href="#support">Support</a>
                <a href="#creators">For Creators</a>
                <a href="#contact">Contact Us</a>
            </div>
            <p class="copyright">&copy; 2025 ComicVerse. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>