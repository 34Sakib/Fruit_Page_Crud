<x-guest-layout>
    <style>
        .fruit-register {
            background-color: #f9f7e8;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 165, 0, 0.2);
            max-width: 500px;
            margin: 0 auto;
        }
        .fruit-header {
            background: linear-gradient(90deg, #ff9a9e 0%, #fad0c4 100%);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            color: white;
            text-align: center;
        }
        .fruit-title {
            color: #ff6b6b;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            margin-bottom: 0;
        }
        .fruit-label {
            color: #6b8e23;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .fruit-input {
            border: 2px solid #fdcb6e;
            border-radius: 10px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        .fruit-input:focus {
            border-color: #74b9ff;
            outline: none;
            box-shadow: 0 0 0 0.25rem rgba(116, 185, 255, 0.25);
        }
        .fruit-button {
            background-color: #55efc4;
            border: none;
            color: #333;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        .fruit-button:hover {
            background-color: #00b894;
            color: white;
        }
        .fruit-link {
            color: #a29bfe;
            text-decoration: none;
            font-weight: bold;
        }
        .fruit-link:hover {
            color: #6c5ce7;
            text-decoration: underline;
        }
        .fruit-error {
            color: #ff7675;
            font-size: 0.875rem;
            margin-top: 5px;
        }
        .fruit-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
    </style>

    <div class="fruit-register">
        <div class="fruit-header">
            <h2 class="fruit-title">🍓 Fruit Market Registration 🍍</h2>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div style="margin-bottom: 15px;">
                <label for="name" class="fruit-label">🍎 Name</label>
                <input id="name" class="fruit-input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                @error('name')
                    <div class="fruit-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email Address -->
            <div style="margin-bottom: 15px;">
                <label for="email" class="fruit-label">✉️ Email</label>
                <input id="email" class="fruit-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                @error('email')
                    <div class="fruit-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div style="margin-bottom: 15px;">
                <label for="password" class="fruit-label">🔑 Password</label>
                <input id="password" class="fruit-input"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
                @error('password')
                    <div class="fruit-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div style="margin-bottom: 15px;">
                <label for="password_confirmation" class="fruit-label">🔏 Confirm Password</label>
                <input id="password_confirmation" class="fruit-input"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <div class="fruit-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="fruit-actions">
                <a class="fruit-link" href="{{ route('login') }}">
                    Already registered?
                </a>

                <button type="submit" class="fruit-button">
                    🍹 Register
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>