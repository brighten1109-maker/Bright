<?php
// Define dynamic page configuration values if needed
$title = "Brighten Devasahayam - Certified Achievement";
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
            --text-muted: #e2e8f0; 
            --img-opacity: 0.9;
            --img-hover-opacity: 1;
            --shadow-intensity: rgba(0, 0, 0, 0.7);
            --portfolio-gradient: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            --screen-glass: rgba(10, 12, 16, 0.5);
        }

        [data-theme="light"] {
            --bg-outer: #f0f2f5;
            --bg-main: #ffffff;
            --glass-bg: rgba(255, 255, 255, 0.45);
            --glass-border: rgba(0, 0, 0, 0.04);
            --text-primary: #11141a;
            --text-muted: #0f172a; 
            --img-opacity: 0.95;
            --img-hover-opacity: 1;
            --shadow-intensity: rgba(142, 149, 165, 0.15);
            --portfolio-gradient: linear-gradient(135deg, #ff0844 0%, #ffb199 100%);
            --screen-glass: rgba(240, 242, 255, 0.3);
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
            padding: 3vw 2vw;
            position: relative;
            transition: background-color 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }

        /* --- Ambient Blur Behind Elements --- */
        .bg-blur-glow {
            position: fixed;
            width: 75vw;
            height: 65vh;
            background: var(--portfolio-gradient);
            opacity: 0.22;
            filter: blur(140px);
            border-radius: 50%;
            z-index: 0;
            pointer-events: none;
            transition: background 0.8s ease;
        }

        /* --- Glassmorphism Backdrop Overlay --- */
        .glass-blur-backdrop {
            position: fixed;
            inset: 0;
            background: var(--screen-glass);
            backdrop-filter: blur(35px) saturate(120%);
            -webkit-backdrop-filter: blur(35px) saturate(120%);
            z-index: 1;
            pointer-events: none;
            transition: background 0.8s ease;
        }

        /* --- Ultra-Wider Vertically Stacked Canvas Block --- */
        .portfolio-canvas {
            width: 92vw;            
            max-width: 1400px;
            background-color: var(--bg-main);
            position: relative;
            overflow: hidden;
            border-radius: 24px;
            border: 1px solid var(--glass-border);
            box-shadow: 0 60px 130px var(--shadow-intensity);
            z-index: 2; 
            display: flex;
            flex-direction: column;
            padding: 5rem;
            gap: 3rem;
            transition: background-color 0.8s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.8s ease;
        }

        /* --- Content Layout Stack Modules --- */
        .cert-header-area {
            position: relative;
            z-index: 3;
            width: 100%;
        }

        .cert-image-container {
            width: 100%;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--glass-border);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 3;
        }

        .art-image-backdrop {
            width: 100%;
            height: auto;
            max-height: 700px;
            object-fit: contain;
            display: block;
            opacity: var(--img-opacity);
            filter: contrast(98%);
            transition: transform 1.2s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.6s ease;
            will-change: transform;
        }

        .cert-description-area {
            position: relative;
            z-index: 3;
            width: 100%;
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 2.5rem 3rem;
            border-radius: 16px;
            border: 1px solid var(--glass-border);
            transition: background 0.8s ease;
        }

        /* --- Clean Interactive Text Component --- */
        .interactive-text-block {
            display: flex;
            flex-direction: column;
            gap: 0.8rem; /* Controlled global layout rhythm */
            position: relative;
            cursor: pointer;
            transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1);
            will-change: transform;
        }

        .interactive-text-block:hover {
            transform: scale(1.005);
        }

        /* Canvas interaction tracking triggers image updates */
        .portfolio-canvas:hover .art-image-backdrop {
            transform: scale(1.015);
            opacity: var(--img-hover-opacity);
        }

        /* --- Typography Layout Elements --- */
        .cert-title {
            color: var(--text-primary);
            font-size: clamp(2.4rem, 5.5vw, 4.2rem);
            line-height: 0.95;
            text-transform: uppercase;
            letter-spacing: -3px;
            transition: color 0.8s ease;
        }

        .cert-subtitle {
            font-family: 'Arial Black', sans-serif;
            font-weight: 900;
            font-size: clamp(1rem, 2.2vw, 1.6rem);
            line-height: 1;
            text-transform: uppercase;
            background: var(--portfolio-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-top: 0.5rem;
        }

        /* Structured Typography Segments within the Content Box */
        .cert-desc-title {
            font-family: 'Arial Black', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: clamp(1.2rem, 2.4vw, 1.55rem);
            color: var(--text-primary);
            text-transform: uppercase;
            letter-spacing: -1px;
        }

        .cert-desc-authority {
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: clamp(1.05rem, 2vw, 1.25rem);
            background: var(--portfolio-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 900;
            text-transform: uppercase;
            margin-bottom: 0.4rem;
        }

        .cert-desc-text {
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: clamp(1.15rem, 2.2vw, 1.35rem); 
            color: var(--text-muted);
            font-weight: 800; 
            line-height: 1.7;
            letter-spacing: -0.2px;
            transition: color 0.8s ease;
        }

        /* --- External Navigation & Control Anchors --- */
        .global-controls-dock-right {
            position: fixed;
            bottom: 4rem;
            right: 4rem;
            z-index: 1000;
        }

        .global-controls-dock-left {
            position: fixed;
            bottom: 4rem;
            left: 4rem;
            z-index: 1000;
        }

        .utility-round-btn {
            width: 65px;
            height: 65px;
            background-color: var(--bg-main);
            border: 1px solid var(--glass-border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-primary);
            cursor: pointer;
            box-shadow: 0 15px 35px var(--shadow-intensity);
            outline: none;
            text-decoration: none;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), color 0.4s, border-color 0.4s;
        }

        .utility-round-btn svg {
            width: 22px;
            height: 22px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2.5;
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: transform 0.3s ease;
        }

        .utility-round-btn:hover {
            border-color: var(--text-primary);
            background-color: var(--text-primary);
            color: var(--bg-main);
            transform: translateY(-4px) scale(1.05);
        }
        
        .theme-toggle-btn:hover svg {
            transform: rotate(20deg);
        }

        .nav-left-btn:hover svg {
            transform: translateX(-2px) translateY(-2px);
        }

        /* --- Responsive Framework Adjustments --- */
        @media (max-width: 1024px) {
            body { padding: 2rem 1rem; }
            .bg-blur-glow, .glass-blur-backdrop { display: none; }
            .portfolio-canvas { width: 100%; padding: 3rem 1.75rem; gap: 2rem; }
            .cert-description-area { padding: 2rem 1.5rem; }
            .global-controls-dock-right { bottom: 2rem; right: 2rem; }
            .global-controls-dock-left { bottom: 2rem; left: 2rem; }
            .utility-round-btn { width: 55px; height: 55px; }
        }
    </style>
</head>
<body>

    <div class="bg-blur-glow"></div>

    <div class="glass-blur-backdrop"></div>

    <div class="portfolio-canvas">
        
        <div class="cert-header-area">
            <h1 class="cert-title">Mobile HW Technician<br>Architect</h1>
            <div class="cert-subtitle">e-CareerPlus • 2023</div>
        </div>

        <div class="cert-image-container">
            <img src="img/c2.jpeg" alt="AWS Solutions Architect Certificate Asset" class="art-image-backdrop">
        </div>

        <div class="cert-description-area">
            <div class="interactive-text-block">
                <h3 class="cert-desc-title">Title: Mobile Phone Hardware Specialist</h3>
                <div class="cert-desc-authority">Authority: e-Careerpluz & Arul Anandar College • 2023</div>
                <p class="cert-desc-text">Note: Deep-dive analysis of micro-component diagnostics, hardware telemetry systems, physical circuit layout troubleshooting, and system-level interface restoration protocols.</p>
            </div>
        </div>

    </div>

    <div class="global-controls-dock-left">
        <a href="index.php" class="utility-round-btn nav-left-btn" aria-label="Return back to previous home window layer">
            <svg viewBox="0 0 24 24">
                <line x1="17" y1="17" x2="7" y2="7"></line>
                <polyline points="17 7 7 7 7 17"></polyline>
            </svg>
        </a>
    </div>

    <div class="global-controls-dock-right">
        <button class="utility-round-btn theme-toggle-btn" id="paletteSwitcher" aria-label="Toggle Layout Theme">
            <svg id="themeIcon" viewBox="0 0 24 24">
                <path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-11.314l.707.707m10.607 10.607l.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
            </svg>
        </button>
    </div>

    <script>
        // --- Universal Theme Control Engine ---
        const switcher = document.getElementById('paletteSwitcher');
        const iconContainer = document.getElementById('themeIcon');
        const rootElement = document.documentElement;

        const sunIconPath = `<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-11.314l.707.707m10.607 10.607l.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>`;
        const moonIconPath = `<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>`;

        switcher.addEventListener('click', () => {
            const currentMode = rootElement.getAttribute('data-theme');
            const isDark = currentMode === 'dark';
            
            rootElement.setAttribute('data-theme', isDark ? 'light' : 'dark');
            iconContainer.innerHTML = isDark ? moonIconPath : sunIconPath;
        });
    </script>
</body>
</html>