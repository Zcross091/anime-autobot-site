<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - AnimeReel AI</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Meta Refresh -->
    <meta http-equiv="refresh" content="6; url=https://discord.gg/2jfsJgpWM4">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="logo">AnimeReel <span class="ai">AI</span></div>
        
        <div class="hamburger" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="nav-menu" id="navMenu">
            <li><a href="index.html">Home</a></li>
            <li><a href="features.html">Features</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <!-- Background Animation -->
    <div class="space-bg">
        <div class="planet planet1"></div>
        <div class="planet planet2"></div>
        <div class="blackhole"></div>
    </div>

    <section class="hero" style="margin-top: 9rem; text-align: center; padding: 5rem 5%;">
        <h1>Join Our Discord Community</h1>
        <p class="subtitle" style="font-size: 1.4rem; max-width: 700px; margin: 2rem auto;">
            Have questions about the bot? Need setup help?<br>
            Join our growing anime automation community!
        </p>
        
        <a href="https://discord.gg/2jfsJgpWM4" target="_blank" 
           class="discord-button">
            🎮 Join Discord Server Now
        </a>
        
        <p style="margin-top: 3rem; color: #888; font-size: 1.1rem;">
            Redirecting automatically in <span id="countdown">6</span> seconds...
        </p>
    </section>

    <footer>
        <p>&copy; 2026 AnimeReel AI • Professional Anime Instagram Automation</p>
    </footer>

    <script src="assets/js/script.js"></script>
    <script>
        // JavaScript Fallback Redirect
        let timeLeft = 6;
        const countdownEl = document.getElementById('countdown');
        
        const timer = setInterval(() => {
            timeLeft--;
            if (countdownEl) countdownEl.textContent = timeLeft;
            
            if (timeLeft <= 0) {
                clearInterval(timer);
                window.location.href = "https://discord.gg/2jfsJgpWM4";
            }
        }, 1000);

        // Immediate redirect option
        function goToDiscord() {
            window.open("https://discord.gg/2jfsJgpWM4", "_blank");
        }
    </script>
</body>
</html>
