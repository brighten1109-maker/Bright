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
            --bg-main: #11141a;
            --glass-bg: rgba(17, 20, 26, 0.45);
            --glass-border: rgba(255, 255, 255, 0.05);
            --text-primary: #f5f6f8;
            --text-muted: #626875;
            --img-opacity: 0.85;
            --shadow-intensity: rgba(0, 0, 0, 0.7);
            --portfolio-gradient: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            --ambient-glow: rgba(0, 242, 254, 0.12);
            --screen-glass: rgba(10, 12, 16, 0.6);
            --glitter-glow-from: rgba(0, 242, 254, 0.15);
            --glitter-glow-to: rgba(79, 172, 254, 0.45);
        }

        [data-theme="light"] {
            --bg-outer: #f0f2f5;
            --bg-main: #ffffff;
            --glass-bg: rgba(255, 255, 255, 0.45);
            --glass-border: rgba(0, 0, 0, 0.04);
            --text-primary: #11141a;
            --text-muted: #8e95a5;
            --img-opacity: 1;
            --shadow-intensity: rgba(142, 149, 165, 0.15);
            --portfolio-gradient: linear-gradient(135deg, #ff0844 0%, #ffb199 100%);
            --ambient-glow: rgba(255, 8, 68, 0.08);
            --screen-glass: rgba(240, 242, 255, 0.4);
            --glitter-glow-from: rgba(255, 8, 68, 0.12);
            --glitter-glow-to: rgba(255, 177, 153, 0.35);
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
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
            padding: 2vw;
            position: relative;
            transition: background-color 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }

        /* --- Ambient Blur Behind Frame Elements --- */
        .bg-blur-glow {
            position: absolute;
            width: 70vw;
            height: 60vh;
            background: var(--portfolio-gradient);
            opacity: 0.25;
            filter: blur(140px);
            border-radius: 50%;
            z-index: 0;
            pointer-events: none;
            transition: background 0.8s ease, opacity 0.8s ease;
        }

        /* --- Premium High-Fidelity Glassmorphism Backdrop Overlay --- */
        .glass-blur-backdrop {
            position: absolute;
            inset: 0;
            background: var(--screen-glass);
            backdrop-filter: blur(40px) saturate(120%);
            -webkit-backdrop-filter: blur(40px) saturate(120%);
            z-index: 1;
            pointer-events: none;
            transition: background 0.8s ease;
        }

        /* --- Custom Preserved Frame Grid Structure --- */
        .portfolio-canvas {
            width: 90vw;            
            max-width: 1600px;
            height: 85vh;           
            min-height: 650px;
            background-color: var(--bg-main);
            display: grid;
            /* Explicit ratio: expands text panel area, keeps image at the exact original 1fr ratio */
            grid-template-columns: 2.4fr 1fr 0.18fr; 
            box-shadow: 0 50px 120px var(--shadow-intensity);
            position: relative;
            overflow: hidden;
            border-radius: 16px;
            border: 1px solid var(--glass-border);
            z-index: 2; 
            transition: background-color 0.8s cubic-bezier(0.25, 1, 0.5, 1), 
                        box-shadow 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }

        /* --- Main Left Dynamic Text Area --- */
        .hero-info-panel {
            padding: 6rem 4.5rem;   
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            background: var(--glass-bg);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border-right: 1px solid var(--glass-border);
            z-index: 5;
            transition: background 0.8s cubic-bezier(0.25, 1, 0.5, 1), 
                        border-right 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }

        /* --- Unified Text Block Container --- */
        .interactive-text-block {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
            position: relative;
            width: max-content;
            cursor: pointer;
            border-radius: 20px;
            transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1);
            will-change: transform;
        }

        /* Premium Shimmering Glittering Fog Backdrop Layer */
        .interactive-text-block::before {
            content: '';
            position: absolute;
            inset: -25px -35px;
            border-radius: 30px;
            z-index: -1;
            filter: blur(30px);
            opacity: 0.7;
            background-image: 
                radial-gradient(circle at 20% 30%, var(--glitter-glow-from) 1px, transparent 1px),
                radial-gradient(circle at 75% 40%, var(--glitter-glow-to) 2px, transparent 2px),
                radial-gradient(circle at 40% 80%, var(--glitter-glow-from) 1.5px, transparent 1.5px),
                radial-gradient(circle at 90% 15%, var(--glitter-glow-to) 1px, transparent 1px),
                linear-gradient(45deg, var(--glitter-glow-from), var(--glitter-glow-to));
            background-size: 150% 150%, 140% 140%, 160% 160%, 130% 130%, 100% 100%;
            transition: opacity 0.5s ease;
            animation: glitterMove 6s infinite alternate linear;
            will-change: background-position;
        }

        .interactive-text-block:hover {
            transform: scale(1.02);
        }

        .interactive-text-block:hover::before {
            opacity: 1;
        }

        @keyframes glitterMove {
            0% { background-position: 0% 0%, 10% 20%, -5% 10%, 20% 0%, 0% 50%; }
            50% { background-position: 15% 10%, -10% 5%, 15% -20%, 0% 15%, 50% 100%; }
            100% { background-position: -10% 20%, 5% -15%, -10% -5%, -15% 10%, 100% 50%; }
        }

        /* --- Typography Layout Elements --- */
        .hero-title {
            color: var(--text-primary);
            font-size: clamp(2.4rem, 4.8vw, 5.5rem); 
            line-height: 0.85;
            text-transform: uppercase;
            letter-spacing: -3px;
            transition: color 0.8s ease;
        }

        .hero-subtitle {
            font-family: 'Arial Black', sans-serif;
            font-weight: 900;
            font-size: clamp(1.2rem, 2.5vw, 2.8rem);
            line-height: 1;
            letter-spacing: -1px;
            text-transform: uppercase;
            background: var(--portfolio-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            padding-left: 2px;
        }

        /* --- Crosswise Geometric Image Masks --- */
        .art-panel-wrapper {
            position: relative;
            overflow: hidden;
            height: 100%;
            width: 100%;
        }

        .art-panel-wrapper.panel-one {
            clip-path: polygon(0 0, 100% 8%, 100% 100%, 0 92%);
            z-index: 2;
        }

        .art-image {
            width: 100%;
            height: 140%; 
            object-fit: cover;
            object-position: center top;
            opacity: var(--img-opacity);
            position: absolute;
            left: 0;
            filter: grayscale(10%);
            transition: transform 1.5s cubic-bezier(0.16, 1, 0.3, 1), 
                        filter 1.5s cubic-bezier(0.16, 1, 0.3, 1),
                        opacity 0.8s cubic-bezier(0.25, 1, 0.5, 1);
            will-change: transform, filter;
        }

        .panel-one .art-image {
            top: -10%;
            transform: translateY(0) scale(1.02);
        }

        /* --- Interactive Hover Motions --- */
        .portfolio-canvas:hover .panel-one .art-image {
            transform: translateY(60px) scale(1.05); 
            filter: grayscale(0%) contrast(102%);
        }

        /* --- Minimal Right Functional Rail --- */
        .right-sidebar {
            background-color: var(--bg-main);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding: 3rem 0;
            z-index: 10;
            border-left: 1px solid var(--glass-border);
            transition: background-color 0.8s cubic-bezier(0.25, 1, 0.5, 1), 
                        border-left 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }

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
            outline: none;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), 
                        color 0.8s cubic-bezier(0.25, 1, 0.5, 1), 
                        border-color 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .theme-toggle-btn:hover {
            transform: scale(1.15) rotate(15deg);
            border-color: var(--text-primary);
        }

        .theme-toggle-btn svg {
            width: 18px;
            height: 18px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2.5;
        }

        /* --- Custom Floating Anchor Tag --- */
        .footer-navigation-arrow {
            position: fixed;
            bottom: 4rem;
            right: 4rem;
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
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), 
                        background-color 0.8s cubic-bezier(0.25, 1, 0.5, 1), 
                        color 0.8s cubic-bezier(0.25, 1, 0.5, 1), 
                        border-color 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .footer-navigation-arrow svg {
            width: 22px;
            height: 22px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2.5;
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .footer-navigation-arrow:hover {
            border-color: var(--text-primary);
            background-color: var(--text-primary);
            color: var(--bg-main);
            transform: scale(1.08);
        }

        .footer-navigation-arrow:hover svg {
            transform: translateX(2px) translateY(-2px);
        }

        /* Responsive Viewport Management Stack */
        @media (max-width: 1024px) {
            body { padding: 2rem; }
            .bg-blur-glow, .glass-blur-backdrop { display: none; }
            .portfolio-canvas {
                grid-template-columns: 1fr;
                width: 100%;
                height: auto;
            }
            .hero-info-panel { height: auto; min-height: 380px; padding: 3.5rem 2.5rem; border-right: none; border-bottom: 1px solid var(--glass-border); }
            .art-panel-wrapper.panel-one { clip-path: none; height: 500px; }
            .right-sidebar { display: none; }
            .footer-navigation-arrow { bottom: 2rem; right: 2rem; width: 55px; height: 55px;}
        }
    </style>
</head>
<body>

    <div class="bg-blur-glow"></div>

    <div class="glass-blur-backdrop"></div>

    <div class="portfolio-canvas">
        
        <div class="hero-info-panel">
            <div class="interactive-text-block">
                <h1 class="hero-title">Brighten<br>Devasahayam</h1>
                <div class="hero-subtitle">Portfolio</div>
            </div>
        </div>

        <div class="art-panel-wrapper panel-one">
            <img src="img/i6.jpeg" alt="Studio Portrait Work" class="art-image">
        </div>
        
        <div class="right-sidebar">
            <button class="theme-toggle-btn" id="paletteSwitcher" aria-label="Toggle Layout Theme">
                <svg id="themeIcon" viewBox="0 0 24 24">
                    <path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-11.314l.707.707m10.607 10.607l.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
            </button>
        </div>

    </div>

    <a href="index1.php" class="footer-navigation-arrow" aria-label="Navigate portfolio window">
        <svg viewBox="0 0 24 24">
            <line x1="7" y1="17" x2="17" y2="7"></line>
            <polyline points="7 7 17 7 17 17"></polyline>
        </svg>
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
    </script>
</body>
</html>