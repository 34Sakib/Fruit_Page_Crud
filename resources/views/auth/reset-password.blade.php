<x-guest-layout>
    <style>
        .fruit-reset {
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
        .fruit-error {
            color: #ff7675;
            font-size: 0.875rem;
            margin-top: 8px;
        }
        .fruit-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }
    </style>

    <div class="fruit-reset">
        <div class="fruit-header">
            <h2 class="fruit-title">🔑 Reset Your Password 🍓</h2>
        </div>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div style="margin-bottom: 20px;">
                <label for="email" class="fruit-label">✉️ Email</label>
                <input id="email" class="fruit-input" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
                @error('email')
                    <div class="fruit-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div style="margin-bottom: 20px;">
                <label for="password" class="fruit-label">🔒 New Password</label>
                <input id="password" class="fruit-input" type="password" name="password" required autocomplete="new-password" />
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
                <button type="submit" class="fruit-button">
                    🍍 Reset Password
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>