<?php
// Define dynamic page configuration values if needed
$title = "Brighten Devasahayam - Premium Engineering Portfolio";
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        /* --- Clean Dynamic Variables Profiles --- */
        [data-theme="dark"] {
            --bg-outer: #05070a;
            --bg-main: #0b0d13;
            --glass-bg: rgba(11, 13, 19, 0.65);
            --glass-border: rgba(255, 255, 255, 0.08);
            --text-primary: #ffffff;
            --text-muted: #8491a3;
            --img-opacity: 0.9;
            --shadow-intensity: rgba(0, 0, 0, 0.8);
            --portfolio-gradient: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            --card-secondary: #121620;
            --footer-bg: #07090e;
            --footer-text: #e2e8f0;
            --footer-muted: #94a3b8;
            --wave-1: rgba(0, 242, 254, 0.35); 
            --wave-2: rgba(79, 172, 254, 0.25);
            --wave-3: rgba(0, 242, 254, 0.15);
        }

        [data-theme="light"] {
            --bg-outer: #f4f6f9;
            --bg-main: #ffffff;
            --glass-bg: rgba(255, 255, 255, 0.7);
            --glass-border: rgba(0, 0, 0, 0.06);
            --text-primary: #0b0d13;
            --text-muted: #6b7280;
            --img-opacity: 1;
            --shadow-intensity: rgba(15, 23, 42, 0.12);
            --portfolio-gradient: linear-gradient(135deg, #ff0844 0%, #ffb199 100%);
            --card-secondary: #f8fafc;
            --footer-bg: #cbd5e1; 
            --footer-text: #0f172a;
            --footer-muted: #334155;
            --wave-1: rgba(255, 8, 68, 0.25); 
            --wave-2: rgba(255, 177, 153, 0.3);
            --wave-3: rgba(255, 8, 68, 0.12);
        }

        /* --- Global Structural Resets --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Arial Black', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--bg-outer);
            color: var(--text-primary);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
            transition: background-color 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }

        /* --- Floating Ambient Background Blur --- */
        .bg-blur-glow {
            position: fixed;
            top: 15%;
            left: 10%;
            width: 75vw;
            height: 65vh;
            background: var(--portfolio-gradient);
            opacity: 0.18;
            filter: blur(150px);
            border-radius: 50%;
            z-index: 0;
            pointer-events: none;
            transition: background 0.8s ease;
        }

        /* --- Fixed High-Visibility Header Bar --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 2rem 4%; 
            background: rgba(5, 7, 10, 0.05);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .logo {
            font-size: 1.75rem; 
            font-weight: 900;
            letter-spacing: -2px;
            text-transform: uppercase;
            background: var(--portfolio-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        nav {
            display: flex;
            gap: 2.5rem;
            align-items: center;
        }

        nav a {
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--text-primary);
            text-decoration: none;
            font-size: 1.15rem; 
            font-weight: 800;   
            opacity: 0.85;      
            position: relative;
            padding: 0.25rem 0;
            transition: opacity 0.3s ease, color 0.3s ease;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--portfolio-gradient);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        nav a:hover { opacity: 1; }
        nav a:hover::after { transform: scaleX(1); transform-origin: left; }

        .theme-toggle-btn {
            background: none;
            border: 1px solid var(--glass-border);
            color: var(--text-primary);
            cursor: pointer;
            padding: 0.65rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .theme-toggle-btn:hover { transform: scale(1.15) rotate(15deg); }
        .theme-toggle-btn svg { width: 18px; height: 18px; fill: none; stroke: currentColor; stroke-width: 2.5; }

        /* --- Universal Core Layout Structure --- */
        main {
            position: relative;
            z-index: 1;
            padding: 0 4%;
        }

        section {
            padding: 6.5rem 0 5rem 0; 
            max-width: 1500px;
            margin: 0 auto;
            border-bottom: 1px solid var(--glass-border);
        }

        .section-title {
            font-size: clamp(2.2rem, 5vw, 4.5rem);
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: -2px;
            margin-bottom: 3.5rem;
            line-height: 0.9;
        }

        .section-title span {
            background: var(--portfolio-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* --- Expanded Hero Layout Framework --- */
        .portfolio-canvas {
            width: 100%;
            height: 82vh;
            min-height: 650px;
            background-color: var(--bg-main);
            display: grid;
            grid-template-columns: 1.1fr 1.9fr;
            box-shadow: 0 50px 120px var(--shadow-intensity);
            border-radius: 24px;
            border: 1px solid var(--glass-border);
            overflow: hidden;
            margin-top: 6.5rem; 
            transition: background-color 0.8s ease, box-shadow 0.8s ease;
        }

        .hero-info-panel {
            padding: 6rem 4rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            background: var(--glass-bg);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border-right: 1px solid var(--glass-border);
            z-index: 5;
        }

        .header-group {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .hero-title {
            color: var(--text-primary);
            font-size: clamp(2.5rem, 4.8vw, 5.5rem);
            line-height: 0.85;
            text-transform: uppercase;
            letter-spacing: -3px;
        }

        .hero-subtitle {
            font-size: clamp(1.2rem, 2.5vw, 3rem);
            line-height: 1;
            letter-spacing: -1px;
            text-transform: uppercase;
            background: var(--portfolio-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-desc-text {
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 1rem;
            color: var(--text-muted);
            margin-top: 1rem;
            font-weight: 500;
            line-height: 1.6;
        }

        .art-panel-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
            background: var(--card-secondary);
        }

        .bubble-frame-container {
            width: 440px;
            height: 440px;
            position: relative;
            overflow: hidden;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            box-shadow: 0 30px 60px var(--shadow-intensity), inset 0 0 20px rgba(255,255,255,0.1);
            border: 2px solid var(--glass-border);
            animation: bubbleMorph 9s infinite alternate ease-in-out, antiGravityFloat 6s infinite alternate ease-in-out;
            will-change: border-radius, transform;
        }

        .art-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            scale: 1.1;
            filter: grayscale(5%);
        }

        @keyframes bubbleMorph {
            0% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
            33% { border-radius: 50% 50% 30% 70% / 50% 60% 40% 50%; }
            66% { border-radius: 60% 40% 60% 40% / 40% 40% 60% 60%; }
            100% { border-radius: 40% 60% 35% 65% / 50% 30% 70% 50%; }
        }

        @keyframes antiGravityFloat {
            0% { transform: translateY(15px) rotate(0deg); }
            100% { transform: translateY(-25px) rotate(1.5deg); }
        }

        /* --- About Section Layout --- */
        .about-layout {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3.5rem;
        }

        .about-paragraphs-stack {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }

        .about-text p {
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-primary);
            opacity: 0.95;
        }

        .metrics-bar {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 2rem;
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            padding: 3rem 2.5rem;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            margin-top: 1.5rem;
        }

        .metric-unit h4 {
            font-size: 3.8rem;
            font-weight: 900;
            background: var(--portfolio-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
        }

        .metric-unit p {
            font-size: 0.8rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 0.65rem;
        }

        /* --- Technical Stack Grid Matrix Array --- */
        .tech-matrix {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 2rem;
        }

        .matrix-category {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            padding: 2.5rem 2rem;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 1.25rem;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.4s ease;
        }

        .matrix-category:hover {
            transform: translateY(-8px);
            border-color: var(--text-primary);
        }

        .matrix-category svg {
            width: 50px;
            height: 50px;
            fill: currentColor;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .matrix-category:hover svg { transform: scale(1.18) rotate(4deg); }
        .matrix-category h3 { font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; }

        /* --- Projects Carousel --- */
        .slider-viewport {
            width: 100%;
            overflow: hidden;
            position: relative;
            cursor: grab;
        }

        .slider-track {
            display: flex;
            gap: 2rem;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .project-card {
            flex: 0 0 420px;
            background: var(--bg-main);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .project-card:hover { transform: translateY(-5px); }
        .project-img-link { display: block; height: 250px; overflow: hidden; position: relative; }
        .project-img-link img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
        .project-img-link:hover img { transform: scale(1.05); }
        .project-info { padding: 2rem; }
        .project-info h3 { font-size: 1.3rem; margin-bottom: 0.5rem; text-transform: uppercase; }
        .project-info p { font-family: -apple-system, BlinkMacSystemFont, sans-serif; color: var(--text-muted); font-size: 0.95rem; line-height: 1.5; }

        /* --- One-by-One Vertical Stack List Layout for Verified Achievements --- */
        .cert-stack-list {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            width: 100%;
        }

        .cert-list-row {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            padding: 1.75rem 2.5rem;
            border-radius: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: border-color 0.3s ease, background-color 0.3s ease, transform 0.3s ease;
        }

        .cert-list-row:hover {
            border-color: rgba(255, 255, 255, 0.15);
            background-color: var(--card-secondary);
            transform: scale(1.01) translateX(4px);
        }

        .cert-meta-info {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .cert-meta-info h3 { 
            font-size: 1.25rem; 
            text-transform: uppercase; 
            letter-spacing: -0.5px;
            line-height: 1.2; 
        }
        
        .cert-meta-info p { 
            font-family: -apple-system, BlinkMacSystemFont, sans-serif; 
            font-size: 0.95rem; 
            color: var(--text-muted); 
            font-weight: 500;
        }
        
        .cert-action-btn {
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--text-primary);
            color: var(--bg-main);
            padding: 0.7rem 1.6rem;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), background-color 0.3s, color 0.3s;
        }

        .cert-action-btn:hover {
            transform: scale(1.08);
            background: var(--portfolio-gradient);
            color: #05070a;
        }

        /* --- Contact Framework Area --- */
        .contact-layout {
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            gap: 4rem;
        }

        .contact-meta h3 { font-size: 2rem; text-transform: uppercase; margin-bottom: 1rem; }
        .contact-meta p { font-family: -apple-system, BlinkMacSystemFont, sans-serif; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.5rem; }
        .contact-form { display: flex; flex-direction: column; gap: 1.75rem; }
        .input-group { display: flex; flex-direction: column; gap: 0.5rem; }
        .input-group label { font-size: 0.85rem; text-transform: uppercase; color: var(--text-muted); display: block; }
        .input-group input, .input-group textarea { width: 100%; background: var(--glass-bg); border: 1px solid var(--glass-border); padding: 1.2rem; border-radius: 8px; color: var(--text-primary); font-family: inherit; font-size: 1rem; outline: none; transition: border-color 0.3s ease; }
        .input-group input:focus, .input-group textarea:focus { border-color: var(--text-primary); }

        .submit-btn {
            background: var(--portfolio-gradient);
            border: 1px solid transparent;
            color: #05070a;
            padding: 1.25rem;
            border-radius: 8px;
            font-size: 1.05rem;
            font-weight: 900;
            text-transform: uppercase;
            cursor: pointer;
            margin-top: 0.5rem;
            box-shadow: 0 10px 20px var(--shadow-intensity);
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), background-color 0.3s, border-color 0.3s;
        }
        
        .submit-btn:hover {
            transform: scale(1.03) translateY(-2px);
            background: transparent;
            color: var(--text-primary);
            border-color: var(--text-primary);
        }
        .submit-btn:active { transform: scale(0.98); }

        .connection-apps-group {
            margin-top: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .connection-apps-group h4 { font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; color: var(--text-muted); }
        .apps-flex { display: flex; flex-wrap: wrap; gap: 1.25rem; }

        .static-social-link {
            width: 52px;
            height: 52px;
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-primary);
            text-decoration: none;
            box-shadow: 0 10px 25px var(--shadow-intensity);
            animation-duration: 3.5s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            animation-timing-function: ease-in-out;
        }

        .link-github { animation-name: waveFloat1; }
        .link-linkedin { animation-name: waveFloat2; animation-delay: 0.4s; }
        .link-mail { animation-name: waveFloat3; animation-delay: 0.6s; } 
        .link-instagram { animation-name: waveFloat4; animation-delay: 0.8s; }
        .link-whatsapp { animation-name: waveFloat1; animation-delay: 1.2s; }

        .static-social-link:hover {
            animation-play-state: paused; 
            transform: translateY(-6px) scale(1.1);
            border-color: var(--text-primary);
            background: var(--portfolio-gradient);
            color: #05070a;
        }

        .static-social-link svg { width: 22px; height: 22px; fill: currentColor; }

        @keyframes waveFloat1 { 0% { transform: translateY(0px) rotate(0deg); } 100% { transform: translateY(-10px) rotate(2deg); } }
        @keyframes waveFloat2 { 0% { transform: translateY(0px) rotate(0deg); } 100% { transform: translateY(-13px) rotate(-3deg); } }
        @keyframes waveFloat3 { 0% { transform: translateY(0px) rotate(0deg); } 100% { transform: translateY(-9px) rotate(4deg); } }
        @keyframes waveFloat4 { 0% { transform: translateY(0px) rotate(0deg); } 100% { transform: translateY(-11px) rotate(-2deg); } }

        /* --- High-Fidelity Deep Sea Wave Footer --- */
        footer {
            padding: 4.5rem 6% 8rem 6%; 
            background: var(--footer-bg);
            border-top: 1px solid var(--glass-border);
            position: relative;
            z-index: 10;
            overflow: hidden;
            transition: background-color 0.8s ease;
        }

        .footer-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 2rem;
            position: relative;
            z-index: 5;
        }

        .footer-details h3 { font-size: 1.3rem; text-transform: uppercase; margin-bottom: 0.75rem; color: var(--footer-text); }
        .footer-details p { font-family: -apple-system, BlinkMacSystemFont, sans-serif; font-size: 0.95rem; color: var(--footer-muted); line-height: 1.5; max-width: 500px; }
        .footer-grid div:nth-child(2) p { color: var(--footer-text); }

        .footer-copyright {
            grid-column: 1 / -1;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--glass-border);
            display: flex;
            justify-content: space-between;
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 0.85rem;
            color: var(--footer-muted);
        }

        .sea-waves-wrapper {
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 130px; 
            line-height: 0;
            pointer-events: none;
            z-index: 1;
        }

        .wave-svg {
            position: absolute;
            bottom: 0;
            width: 200%;
            height: 100%;
            animation: seaShift 12s linear infinite;
            transform: translate3d(0, 0, 0);
        }

        .wave-layer1 { fill: var(--wave-1); z-index: 3; animation-duration: 6s; }
        .wave-layer2 { fill: var(--wave-2); z-index: 2; animation-duration: 9s; animation-direction: reverse; }
        .wave-layer3 { fill: var(--wave-3); z-index: 1; animation-duration: 13s; }

        @keyframes seaShift {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* --- Bidirectional Dual Navigation Pointers --- */
        .footer-navigation-arrow {
            position: fixed;
            bottom: 4rem;
            width: 70px;
            height: 70px;
            background-color: var(--bg-main);
            border: 1px solid var(--glass-border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-primary);
            text-decoration: none;
            box-shadow: 0 20px 45px var(--shadow-intensity);
            z-index: 999;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.4s;
        }

        .footer-navigation-arrow.nav-right { right: 4rem; }
        .footer-navigation-arrow.nav-left { left: 4rem; }

        .footer-navigation-arrow svg { width: 22px; height: 22px; fill: none; stroke: currentColor; stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round; transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1); }
        .footer-navigation-arrow:hover { border-color: var(--text-primary); background-color: var(--text-primary); color: var(--bg-main); transform: scale(1.08); }
        .footer-navigation-arrow.nav-right:hover svg { transform: translateX(2px) translateY(-2px); }
        .footer-navigation-arrow.nav-left:hover svg { transform: translateX(-2px) translateY(-2px); }

        @media (max-width: 1024px) {
            body { padding: 0; }
            .portfolio-canvas, .about-layout, .contact-layout, .footer-grid, .cert-list-row { grid-template-columns: 1fr; }
            .portfolio-canvas { height: auto; margin-top: 5.5rem; }
            .hero-info-panel { height: auto; min-height: 380px; padding: 4rem 2rem; border-right: none; border-bottom: 1px solid var(--glass-border); }
            .art-panel-wrapper { height: 500px; }
            .bubble-frame-container { width: 330px; height: 320px; }
            .cert-list-row { gap: 1rem; text-align: center; justify-content: center; padding: 1.5rem; }
            header { padding: 1.5rem 5%; }
            section { padding: 5rem 5% 3.5rem 5%; }
            .project-card { flex: 0 0 85vw; }
            .footer-navigation-arrow { display: none; }
        }
    </style>
</head>
<body>

    <div class="bg-blur-glow"></div>

    <header>
        <div class="logo">Zyano.</div>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Work</a>
            <a href="#certifications">Achievement</a>
            <a href="#contact">Connect</a>
            <button class="theme-toggle-btn" id="paletteSwitcher" aria-label="Toggle Layout Theme">
                <svg id="themeIcon" viewBox="0 0 24 24">
                    <path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-11.314l.707.707m10.607 10.607l.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
            </button>
        </nav>
    </header>

    <main>
        <section id="home">
            <div class="portfolio-canvas">
                <div class="hero-info-panel">
                    <div class="header-group">
                        <h1 class="hero-title">Brighten<br>Devasahayam</h1>
                        <div class="hero-subtitle">Developer</div>
                        <p class="hero-desc-text">Full-stack Software Developer crafting elegant solutions to complex architecture, specialized in performance and structural scalability.</p>
                    </div>
                </div>
                <div class="art-panel-wrapper">
                    <div class="bubble-frame-container">
                        <img src="img/i1.jpeg" alt="Studio Portrait Work" class="art-image">
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <h2 class="section-title">Cognitive <span>Evaluation</span></h2>
            <div class="about-layout">
                <div class="about-paragraphs-stack">
                    <div class="about-text">
                        <p>I approached technology at the intersection of curiosity and blind experimentation. With zero experience in structured logic or architecture, my focus sat squarely on making things work quickly, relying on basic tutorials and surface-level understanding without considering scalability or long-term efficiency.</p>
                    </div>
                    <div class="about-text">
                        <p>Simplicity gave way to academic structure and foundational theory. By learning core algorithms and object-oriented paradigms, I delivered functional projects across university labs, moving away from chaotic coding toward structured logic, whether operating on minor desktop applications or initial web projects.</p>
                    </div>
                    <div class="about-text">
                        <p>Pragmatic engineering now requires continuous research and deep specialization. I prioritize advanced system complexities, implementing data-driven research methodologies to solve real-world problems and protect projects from inefficient design, focusing strictly on high-impact, optimized solutions.</p>
                    </div>
                </div>
                
                <div class="metrics-bar" id="metricsCounterTrigger">
                    <div class="metric-unit">
                        <h4 class="counter-node" data-target="5">0</h4>
                        <p>Years Experienced</p>
                    </div>
                    <div class="metric-unit">
                        <h4 class="counter-node" data-target="11">0</h4>
                        <p>Projects Handled</p>
                    </div>
                    <div class="metric-unit">
                        <h4 class="counter-node" data-target="99">0</h4>
                        <p>Uptime Optimized</p>
                    </div>
                    <div class="metric-unit">
                        <h4 class="counter-node" data-target="12">0</h4>
                        <p>Core Frameworks</p>
                    </div>
                    <div class="metric-unit">
                        <h4 class="counter-node" data-target="25">0</h4>
                        <p>Certificates</p>
                    </div>
                    <div class="metric-unit">
                        <h4 class="counter-node" data-target="8.43">0</h4>
                        <p>CGPA Throttle</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills">
            <h2 class="section-title">Technical <span>Stack Matrix</span></h2>
            <div class="tech-matrix">
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M12 2L2 6.5v11L12 22l10-4.5v-11L12 2zm0 2.3l7.3 3.3L12 10.9 4.7 7.6 12 4.3zm-8 4.6l7 3.2v7.4l-7-3.1V8.9zm9 10.6v-7.4l7-3.2v7.5l-7 3.1z"/></svg>
                    <h3>C Language</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M12 2L2 6.5v11L12 22l10-4.5v-11L12 2zm0 16.5l-6-2.7V9.2l6 2.7v6.6zm7-11.2l-3.5 1.6-3.5-1.6 3.5-1.6 3.5 1.6zM14 13h2v2h-2v-2zm0-4h2v2h-2V9z"/></svg>
                    <h3>C++</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M2 6h20v12H2V6zm2 2v8h16V8H4zm3 2h2v4H7v-4zm4 0h2v4h-2v-4zm4 0h2v4h-2v-4z"/></svg>
                    <h3>C#</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M12 2c5.522 0 10 4.477 10 10s-4.478 10-10 10-10-4.477-10-10 4.478-10 10-10zm0 3c-3.859 0-7 3.141-7 7s3.141 7 7 7 7-3.141 7-7-3.141-7-7-7zm-1 3h2v4h3v2h-5V8z"/></svg>
                    <h3>Python</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9v-2h2v2zm0-4H9V7h2v5zm4 4h-2v-2h2v2zm0-4h-2V7h2v5z"/></svg>
                    <h3>MySQL</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5v-3.5l-10 5-10-5V17zm0-5l10 5 10-5V8.5l-10 5-10-5V12z"/></svg>
                    <h3>TypeScript</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm1 14.5h-2v-2h2zm0-3.5h-2V7h2z"/></svg>
                    <h3>Node.js</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm4.5 11h-3v3h-3v-3h-3v-3h3V7h3v3h3z"/></svg>
                    <h3>React.js</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M3 3h18v18H3V3zm2 2v14h14V5H5zm4 4h6v2H9V9zm0 4h6v2H9v-2z"/></svg>
                    <h3>Docker</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5v-5l-10 5-10-5v5z"/></svg>
                    <h3>AWS Cloud</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12h2c0 4.418 3.582 8 8 8s8-3.582 8-8-3.582-8-8-8-8 3.582-8 8H2c0-5.523 4.477-10 10-10z"/></svg>
                    <h3>Java</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M3 3h18v18H3V3zm10 5h2v6h-2V8zm-4 4h2v2H9v-2z"/></svg>
                    <h3>JavaScript</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2zm0 4l6 12H6l6-12z"/></svg>
                    <h3>Next.js</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M4 4h16v16H4V4zm2 2v12h12V6H6z"/></svg>
                    <h3>Express.js</h3>
                </div>
                <div class="matrix-category">
                    <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 110 20 10 10 0 010-20zm1 5h-2v2h2V7zm0 4h-2v6h2v-6z"/></svg>
                    <h3>PHP Engines</h3>
                </div>
            </div>
        </section>

        <section id="projects">
            <h2 class="section-title">Featured <span>Projects</span></h2>
            <div class="slider-viewport" id="sliderViewport">
                <div class="slider-track" id="sliderTrack">
                    <div class="project-card">
                        <a href="https://coe.aactni.edu.in/apr24/22csc109/" target="_blank" class="project-img-link">
                            <div class="project-img-wrapper"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=500&q=80" alt="Analytics Platform"></div>
                        </a>
                        <div class="project-info"><h3>Digi-Locker for AAC </h3><p>A secure digital repository automating student document verification and retrieval to eliminate paperwork and streamline administration.</p></div>
                    </div>
                    <div class="project-card">
                        <a href="#" target="_blank" class="project-img-link">
                            <div class="project-img-wrapper"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=500&q=80" alt="Cloud Portal"></div>
                        </a>
                        <div class="project-info"><h3>Aura Pulse</h3><p>A dynamic community wellness portal tracking public health trends, medical resources, and civic care initiatives in real time.</p></div>
                    </div>
                    <div class="project-card">
                        <a href="#" target="_blank" class="project-img-link">
                            <div class="project-img-wrapper"><img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=500&q=80" alt="Security Node"></div>
                        </a>
                        <div class="project-info"><h3>Nutri Ai</h3><p>A data-driven cognitive system analyzing macronutrient ratios to deliver high-precision dietary recommendations and health predictions.</p></div>
                    </div>
                    <div class="project-card">
                        <a href="#" target="_blank" class="project-img-link">
                            <div class="project-img-wrapper"><img src="https://images.unsplash.com/photo-1544383835-bda2bc66a55d?auto=format&fit=crop&w=500&q=80" alt="Database Cluster"></div>
                        </a>
                        <div class="project-info"><h3>Matrix Academic</h3><p>A streamlined structural interface managing academic data matrices, framework engineering tracks, and student project portfolios in real time.</p></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="certifications">
            <h2 class="section-title">Verified <span>Achievements</span></h2>
            <div class="cert-stack-list">
                <div class="cert-list-row">
                    <div class="cert-meta-info">
                        <h3>Mobile HW Technician</h3>
                        <p>e-CareerPlus • 2023</p>
                    </div>
                    <a href="c1.php" target="_blank" class="cert-action-btn">Verify</a>
                </div>
                <div class="cert-list-row">
                    <div class="cert-meta-info">
                        <h3>Corporate training test</h3>
                        <p>CodeBind Technologies • 2026</p>
                    </div>
                    <a href="c2.php" target="_blank" class="cert-action-btn">Verify</a>
                </div>
                <div class="cert-list-row">
                    <div class="cert-meta-info">
                        <h3>Workshop on AI</h3>
                        <p>CodeBind Technologies • 2026</p>
                    </div>
                    <a href="c3.php" target="_blank" class="cert-action-btn">Verify</a>
                </div>
                <div class="cert-list-row">
                    <div class="cert-meta-info">
                        <h3>Flask Python Certificate</h3>
                        <p>Sputnik Infotech • 2024</p>
                    </div>
                    <a href="c4.php" target="_blank" class="cert-action-btn">Verify</a>
                </div>
                <div class="cert-list-row">
                    <div class="cert-meta-info">
                        <h3>Inplant training </h3>
                        <p>CodeBind Technologies • 2026</p>
                    </div>
                    <a href="c5.php" target="_blank" class="cert-action-btn">Verify</a>
                </div>
                <div class="cert-list-row">
                    <div class="cert-meta-info">
                        <h3>NPTEL online Certificate</h3>
                        <p> MOOC - India • 2026</p>
                    </div>
                    <a href="c6.php" target="_blank" class="cert-action-btn">Verify</a>
                </div>
                <div class="cert-list-row">
                    <div class="cert-meta-info">
                        <h3>Internship completion Certificate</h3>
                        <p>CodeBind Technologies • 2026</p>
                    </div>
                    <a href="c8.php" target="_blank" class="cert-action-btn">Verify</a>
                </div>
            </div>
        </section>

        <section id="contact">
            <h2 class="section-title">Initiate <span>Connection</span></h2>
            <div class="contact-layout">
                <div class="contact-meta">
                    <h3>Let's collaborate.</h3>
                    <p>Have a complex engineering challenge, infrastructural project, or an open engineering slot?</p>
                    
                    <div class="connection-apps-group">
                        <h4>Preferential Networks Platform Links</h4>
                        <div class="apps-flex">
                            <a href="https://github.com" target="_blank" class="static-social-link link-github" aria-label="GitHub Profile"><svg viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg></a>
                            <a href="https://www.linkedin.com/in/brighten-d?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" class="static-social-link link-linkedin" aria-label="LinkedIn Profile"><svg viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                            <a href="mailto:brightenameen11@gmail.com" class="static-social-link link-mail" aria-label="Direct Email Link"><svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg></a>
                            <a href="https://www.instagram.com/brighten_devasahayam?igsh=bHFhMWQ4OGdzZ20y" target="_blank" class="static-social-link link-instagram" aria-label="Instagram Profile"><svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                            <a href="https://wa.me/8124342642" target="_blank" class="static-social-link link-whatsapp" aria-label="WhatsApp Link"><svg viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.717-1.454L0 24zm6.59-4.846c1.66 1.01 3.298 1.515 4.93 1.515 5.4 0 9.794-4.397 9.797-9.798.002-2.618-1.013-5.079-2.859-6.927C16.618 2.1 14.161.915 11.543.915c-5.403 0-9.8 4.398-9.803 9.8-.001 1.751.485 3.42 1.411 4.887l-.993 3.626 3.73-.978zM17.65 14.542c-.31-.155-1.836-.906-2.115-1.008-.278-.101-.482-.153-.684.155-.203.308-.785.99-.962 1.196-.177.205-.355.231-.664.077-.31-.155-1.307-.482-2.49-1.537-.919-.82-1.54-1.834-1.72-2.143-.18-.309-.018-.476.137-.63.14-.139.31-.361.464-.541.154-.18.206-.309.309-.515.103-.206.052-.386-.025-.541-.077-.155-.684-1.648-.938-2.259-.247-.595-.5-.515-.684-.524-.177-.01-.38-.01-.582-.01-.203 0-.532.076-.81.381-.278.305-1.062 1.039-1.062 2.535 0 1.497 1.088 2.943 1.24 3.149.153.205 2.142 3.272 5.19 4.588.725.313 1.291.5 1.731.64.73.232 1.393.199 1.917.121.585-.088 1.836-.751 2.09-1.478.253-.727.253-1.35.177-1.477-.076-.127-.278-.205-.588-.359z"/></svg></a>
                        </div>
                    </div>
                </div>
                <div>
                    <form class="contact-form" onsubmit="event.preventDefault();">
                        <div class="input-group"><label>Name</label><input type="text" required placeholder="Jerry Zyara"></div>
                        <div class="input-group"><label>Email</label><input type="email" required placeholder="jerryzya@company.com"></div>
                        <div class="input-group"><label>Data Message</label><textarea rows="4" required placeholder="Describe system dependencies..."></textarea></div>
                        <button type="submit" class="submit-btn">Send System Request</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-grid">
            <div class="footer-details">
                <h3>Brighten Devasahayam</h3>
                <p>Architecting fluid front-end nodes, relational DB schemas, and low-latency cloud logic frameworks across modern web layouts.</p>
            </div>
            <div style="text-align: right;">
                <p style="font-weight: bold; margin-bottom: 0.5rem;">OFFICIAL MAIL ADDRESS</p>
                <p>brighten1109@gmail.com</p>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2026 Brighten Devasahayam. All rights reserved.</p>
                <p>Zyano Engine v2.70</p>
            </div>
        </div>

        <div class="sea-waves-wrapper">
            <svg class="wave-svg wave-layer1" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,45 C320,95 580,5 920,75 C1210,135 1480,25 1800,85 L1800,120 L0,120 Z"></path>
            </svg>
            <svg class="wave-svg wave-layer2" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,35 C340,-5 670,85 960,25 C1240,-25 1580,95 1850,15 L1850,120 L0,120 Z"></path>
            </svg>
            <svg class="wave-svg wave-layer3" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,55 C385,105 740,35 1020,85 C1320,115 1590,15 1900,65 L1900,120 L0,120 Z"></path>
            </svg>
        </div>
    </footer>

    <a href="index.php" class="footer-navigation-arrow nav-left" aria-label="Return home page pipeline">
        <svg viewBox="0 0 24 24"><line x1="17" y1="17" x2="7" y2="7"></line><polyline points="17 7 7 7 7 17"></polyline></svg>
    </a>

    <a href="index.php" class="footer-navigation-arrow nav-right" aria-label="Forward next project index page">
        <svg viewBox="0 0 24 24"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
    </a>

    <script>
        // --- Theme Switcher Logic ---
        const switcher = document.getElementById('paletteSwitcher');
        const iconContainer = document.getElementById('themeIcon');
        const rootElement = document.documentElement;

        const sunIconPath = `<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-11.314l.707.707m10.607 10.607l.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>`;
        const moonIconPath = `<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>`;

        switcher.addEventListener('click', () => {
            const currentMode = rootElement.getAttribute('data-theme');
            if (currentMode === 'dark') {
                rootElement.setAttribute('data-theme', 'light');
                iconContainer.innerHTML = moonIconPath;
            } else {
                rootElement.setAttribute('data-theme', 'dark');
                iconContainer.innerHTML = sunIconPath;
            }
        });

        // --- Multi-Trigger Re-animating Counter Logic Engine for 6 Metrics ---
        const counterNodes = document.querySelectorAll('.counter-node');
        const observerOptions = { threshold: 0.15, rootMargin: "0px 0px -40px 0px" };

        const metricsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counterNodes.forEach(node => {
                        const target = +node.getAttribute('data-target');
                        let count = 0;
                        const increment = target / 35; 
                        
                        const updateCount = () => {
                            if (count < target) {
                                count += increment;
                                node.innerText = Math.ceil(count) + (target === 99 ? '%' : '+');
                                setTimeout(updateCount, 20);
                            } else {
                                node.innerText = target + (target === 99 ? '%' : '+');
                            }
                        };
                        updateCount();
                    });
                } else {
                    counterNodes.forEach(node => { node.innerText = "0"; });
                }
            });
        }, observerOptions);

        metricsObserver.observe(document.getElementById('metricsCounterTrigger'));

        // --- Swipeable Carousel Slider Mechanics ---
        const viewport = document.getElementById('sliderViewport');
        const track = document.getElementById('sliderTrack');
        let isDragging = false, startX = 0, currentTranslate = 0, prevTranslate = 0;

        viewport.addEventListener('mousedown', e => { isDragging = true; startX = e.pageX; });
        viewport.addEventListener('touchstart', e => { isDragging = true; startX = e.touches[0].clientX; });
        viewport.addEventListener('mouseup', dragEnd);
        viewport.addEventListener('mouseleave', dragEnd);
        viewport.addEventListener('touchend', dragEnd);
        
        viewport.addEventListener('mousemove', e => {
            if (!isDragging) return;
            const currentX = e.pageX;
            currentTranslate = prevTranslate + (currentX - startX);
            track.style.transform = `translateX(${currentTranslate}px)`;
        });

        viewport.addEventListener('touchmove', e => {
            if (!isDragging) return;
            const currentX = e.touches[0].clientX;
            currentTranslate = prevTranslate + (currentX - startX);
            track.style.transform = `translateX(${currentTranslate}px)`;
        });

        function dragEnd() {
            isDragging = false;
            const maxScroll = -(track.scrollWidth - viewport.clientWidth);
            if (currentTranslate > 0) currentTranslate = 0;
            if (currentTranslate < maxScroll) currentTranslate = maxScroll;
            prevTranslate = currentTranslate;
            track.style.transform = `translateX(${currentTranslate}px)`;
        }
    </script>
</body>
</html>