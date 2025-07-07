<x-app-layout>
    <style>
        .fruit-dashboard {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #f9f7e8;
        }
        .fruit-header {
            background: linear-gradient(90deg, #ff9a9e 0%, #fad0c4 100%);
            color: white;
            padding: 20px 0;
        }
        .fruit-header h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
            padding: 0 20px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .fruit-content {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 165, 0, 0.2);
            padding: 30px;
            margin: 20px auto;
            max-width: 1200px;
        }
        .fruit-welcome {
            color: #6b8e23;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .fruit-link {
            display: inline-block;
            background-color: #55efc4;
            color: #333;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
        }
        .fruit-link:hover {
            background-color: #00b894;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .fruit-link:active {
            transform: translateY(0);
        }
    </style>

    <x-slot name="header">
        <div class="fruit-header">
            <h2>🍓 Fruit Dashboard 🍍</h2>
        </div>
    </x-slot>

    <div class="py-12 fruit-dashboard">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="fruit-content">
                <div class="p-6">
                    <p class="fruit-welcome">🍹 {{ __("You're logged in!") }} Ready to manage some fruits?</p>
                    <a href="{{ route('fruits.index') }}" class="fruit-link">
                        🍎 Go to Fruits Management
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>