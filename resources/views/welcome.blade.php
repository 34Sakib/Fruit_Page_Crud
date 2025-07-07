<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fruit Market</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            :root {
                --fruit-primary: #FF6B6B;
                --fruit-secondary: #55EFC4;
                --fruit-accent: #FDCB6E;
                --fruit-dark: #6B8E23;
                --fruit-light: #F9F7E8;
                --fruit-white: #FFFFFF;
            }
            
            body {
                background-color: var(--fruit-light);
                font-family: 'Comic Neue', cursive;
                color: #1b1b18;
                padding: 20px;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
            
            .fruit-container {
                max-width: 1200px;
                margin: 0 auto;
                width: 100%;
            }
            
            .fruit-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 20px 0;
            }
            
            .fruit-nav {
                display: flex;
                gap: 15px;
            }
            
            .fruit-btn {
                padding: 8px 20px;
                border-radius: 5px;
                font-weight: 500;
                transition: all 0.3s ease;
                text-decoration: none;
                display: inline-block;
            }
            
            .fruit-btn-primary {
                background-color: var(--fruit-primary);
                color: white;
                border: 2px solid var(--fruit-primary);
            }
            
            .fruit-btn-primary:hover {
                background-color: #e05555;
                border-color: #e05555;
            }
            
            .fruit-btn-outline {
                border: 2px solid var(--fruit-dark);
                color: var(--fruit-dark);
            }
            
            .fruit-btn-outline:hover {
                background-color: var(--fruit-dark);
                color: white;
            }
            
            .fruit-main {
                background-color: white;
                border-radius: 15px;
                box-shadow: 0 0 20px rgba(253, 203, 110, 0.3);
                overflow: hidden;
                display: flex;
                flex-direction: column-reverse;
            }
            
            .fruit-content {
                padding: 30px;
            }
            
            .fruit-title {
                color: var(--fruit-primary);
                font-size: 1.5rem;
                font-weight: 700;
                margin-bottom: 15px;
            }
            
            .fruit-subtitle {
                color: #706f6c;
                margin-bottom: 20px;
                line-height: 1.5;
            }
            
            .fruit-features {
                margin-bottom: 30px;
            }
            
            .fruit-feature {
                display: flex;
                align-items: center;
                gap: 15px;
                padding: 10px 0;
                position: relative;
            }
            
            .fruit-feature-icon {
                width: 30px;
                height: 30px;
                background-color: var(--fruit-light);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                border: 2px solid var(--fruit-accent);
            }
            
            .fruit-feature-dot {
                width: 12px;
                height: 12px;
                background-color: var(--fruit-accent);
                border-radius: 50%;
            }
            
            .fruit-feature-text {
                flex-grow: 1;
            }
            
            .fruit-link {
                color: var(--fruit-primary);
                font-weight: 600;
                text-decoration: underline;
                display: inline-flex;
                align-items: center;
                gap: 5px;
            }
            
            .fruit-cta {
                margin-top: 20px;
            }
            
            .fruit-hero {
                background: linear-gradient(135deg, #FF9A9E 0%, #FAD0C4 100%);
                padding: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
            }
            
            .fruit-hero-image {
                max-width: 100%;
                height: auto;
                filter: drop-shadow(0 10px 20px rgba(0,0,0,0.1));
            }
            
            .fruit-fruits {
                position: absolute;
                font-size: 3rem;
                animation: float 6s ease-in-out infinite;
            }
            
            .fruit-apple {
                top: 20%;
                left: 15%;
                animation-delay: 0s;
            }
            
            .fruit-banana {
                top: 60%;
                right: 20%;
                animation-delay: 1s;
            }
            
            .fruit-orange {
                bottom: 10%;
                left: 25%;
                animation-delay: 2s;
            }
            
            @keyframes float {
                0%, 100% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-20px);
                }
            }
            
            @media (min-width: 1024px) {
                .fruit-main {
                    flex-direction: row;
                }
                
                .fruit-content {
                    flex: 1;
                    padding: 50px;
                }
                
                .fruit-hero {
                    flex: 0 0 40%;
                }
            }
        </style>
    </head>
    <body>
        <div class="fruit-container">
            <header class="fruit-header">
                <h1>🍓 Fruit Market</h1>
                @if (Route::has('login'))
                    <nav class="fruit-nav">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="fruit-btn fruit-btn-primary">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="fruit-btn fruit-btn-outline">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="fruit-btn fruit-btn-primary">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <main class="fruit-main">
                <div class="fruit-content">
                    <h2 class="fruit-title">Welcome to the Fruit Market! 🍍</h2>
                    <p class="fruit-subtitle">
                        Discover the freshest fruits from around the world. Manage your inventory, 
                        track prices, and keep your fruit business thriving!
                    </p>
                    
                    <div class="fruit-features">
                        <div class="fruit-feature">
                            <div class="fruit-feature-icon">
                                <div class="fruit-feature-dot"></div>
                            </div>
                            <div class="fruit-feature-text">
                                Browse our 
                                <a href="{{ route('fruits.index') }}" class="fruit-link">
                                    fruit catalog 🍎
                                </a>
                                and manage your inventory
                            </div>
                        </div>
                        
                        <div class="fruit-feature">
                            <div class="fruit-feature-icon">
                                <div class="fruit-feature-dot"></div>
                            </div>
                            <div class="fruit-feature-text">
                                Track seasonal prices and availability of your favorite fruits
                            </div>
                        </div>
                    </div>
                    
                    <div class="fruit-cta">
                        <a href="{{ route('fruits.index') }}" class="fruit-btn fruit-btn-primary" style="font-size: 1.1rem;">
                            🍊 Start Exploring Fruits
                        </a>
                    </div>
                </div>
                
                <div class="fruit-hero">
                    <div class="fruit-fruits fruit-apple">🍎</div>
                    <div class="fruit-fruits fruit-banana">🍌</div>
                    <div class="fruit-fruits fruit-orange">🍊</div>
                    <img src="https://images7.alphacoders.com/327/327162.jpg" alt="Fruit Market" class="fruit-hero-image">
                </div>
            </main>
        </div>
    </body>
</html>