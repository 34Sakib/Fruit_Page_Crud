<x-guest-layout>
    <style>
        .fruit-login {
            background-color: #f9f7e8;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 165, 0, 0.2);
            max-width: 500px;
            margin: 0 auto;
        }
        .fruit-header {
            background: linear-gradient(90deg, #ff9a9e 0%, #fad0c4 100%);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 25px;
            color: white;
            text-align: center;
        }
        .fruit-title {
            color: #ff6b6b;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            margin: 0;
        }
        .fruit-label {
            color: #6b8e23;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }
        .fruit-input {
            border: 2px solid #fdcb6e;
            border-radius: 10px;
            padding: 12px;
            width: 100%;
            box-sizing: border-box;
            font-size: 16px;
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
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
        }
        .fruit-button:hover {
            background-color: #00b894;
            color: white;
        }
        .fruit-link {
            color: #a29bfe;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }
        .fruit-link:hover {
            color: #6c5ce7;
            text-decoration: underline;
        }
        .fruit-error {
            color: #ff7675;
            font-size: 0.875rem;
            margin-top: 8px;
        }
        .fruit-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .fruit-remember {
            display: flex;
            align-items: center;
            margin: 15px 0;
        }
        .fruit-remember input {
            width: 18px;
            height: 18px;
            accent-color: #6b8e23;
            margin-right: 8px;
        }
        .fruit-remember span {
            color: #6b8e23;
            font-size: 14px;
        }
        .fruit-status {
            background-color: rgba(85, 239, 196, 0.3);
            border: 1px solid #55efc4;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 20px;
            color: #006b4d;
            text-align: center;
        }
    </style>

    <div class="fruit-login">
        <!-- Session Status -->
        @if(session('status'))
            <div class="fruit-status">
                {{ session('status') }}
            </div>
        @endif

        <div class="fruit-header">
            <h2 class="fruit-title">🍓 Welcome to Fruit Market 🍍</h2>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div style="margin-bottom: 20px;">
                <label for="email" class="fruit-label">✉️ Email</label>
                <input id="email" class="fruit-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
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
                        required autocomplete="current-password" />
                @error('password')
                    <div class="fruit-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="fruit-remember">
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
            </div>

            <div class="fruit-actions">
                @if (Route::has('password.request'))
                    <a class="fruit-link" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif

                <button type="submit" class="fruit-button">
                    🍹 Log In
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>