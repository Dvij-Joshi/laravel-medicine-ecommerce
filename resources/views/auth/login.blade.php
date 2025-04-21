@extends('layouts.app')

@section('content')
<style>
    .hero-buttons .btn.hero-btn {
        background: linear-gradient(90deg, #4e54c8 0%, #43cea2 100%);
        border: none;
        color: #fff;
        box-shadow: 0 2px 8px rgba(78,84,200,0.12);
        font-weight: 600;
        letter-spacing: 0.5px;
        padding: 0.8rem 2rem;
        border-radius: 8px;
        font-size: 1.07rem;
        transition: background 0.2s, box-shadow 0.2s;
    }
    .hero-buttons .btn.hero-btn:hover {
        background: linear-gradient(90deg, #43cea2 0%, #4e54c8 100%);
        box-shadow: 0 4px 16px rgba(78,84,200,0.13);
    }
    .hero-buttons .btn.hero-btn-alt {
        color: #4e54c8;
        border: 2px solid #4e54c8;
        background: #fff;
        font-weight: 600;
        letter-spacing: 0.5px;
        padding: 0.8rem 2rem;
        border-radius: 8px;
        font-size: 1.07rem;
        margin-left: 10px;
        transition: background 0.2s, color 0.2s;
    }
    .hero-buttons .btn.hero-btn-alt:hover {
        background: #4e54c8;
        color: #fff;
    }
    .features-section {
        background: linear-gradient(135deg, #eaf0fb 0%, #f8f9fa 100%);
        padding: 60px 0 40px 0;
        margin: 0 auto 0 auto;
        border-radius: 0 0 18px 18px;
        box-shadow: 0 2px 16px rgba(78,84,200,0.07);
    }
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 32px;
        max-width: 1100px;
        margin: 0 auto;
    }
    .feature-card {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 2px 12px rgba(78,84,200,0.05);
        padding: 28px 22px;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: box-shadow 0.2s;
        text-align: center;
    }
    .feature-card i {
        font-size: 2.2rem;
        color: #4e54c8;
        margin-bottom: 12px;
    }
    .feature-card h3 {
        margin: 0 0 8px 0;
        font-size: 1.15rem;
        font-weight: 600;
        color: #333;
    }
    .feature-card p {
        color: #666;
        font-size: 0.97rem;
        margin-bottom: 0;
        min-height: 38px;
    }
</style>
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h1>Welcome Back</h1>
            <p>Login to access your MediShop account</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="auth-form">
            @csrf

            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                       name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Remember me</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                @endif
            </div>

            <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary btn-block">
                    Login
                </button>
            </div>

            <div class="auth-footer">
                Don't have an account? <a href="{{ route('register') }}">Register here</a>
            </div>
        </form>
    </div>
</div>

<style>
.auth-container {
    min-height: calc(100vh - 180px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.auth-card {
    background: white;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

.auth-header {
    text-align: center;
    margin-bottom: 30px;
}

.auth-header h1 {
    color: #2c3e50;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 10px;
}

.auth-header p {
    color: #666;
    font-size: 16px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #2c3e50;
    font-weight: 500;
    font-size: 14px;
}

.form-control {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
    transition: all 0.3s;
}

.form-control:focus {
    outline: none;
    border-color: #4A90E2;
    box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
}

.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 20px 0;
}

.remember-me {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: #666;
    cursor: pointer;
}

.remember-me input[type="checkbox"] {
    width: 16px;
    height: 16px;
    border: 2px solid #ddd;
    border-radius: 4px;
    cursor: pointer;
}

.forgot-password {
    font-size: 14px;
    color: #4A90E2;
    text-decoration: none;
    font-weight: 500;
}

.forgot-password:hover {
    text-decoration: underline;
}

.btn-primary {
    width: 100%;
    padding: 12px;
    background: #4A90E2;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background: #357ABD;
}

.auth-footer {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #666;
}

.auth-footer a {
    color: #4A90E2;
    text-decoration: none;
    font-weight: 500;
}

.auth-footer a:hover {
    text-decoration: underline;
}

.invalid-feedback {
    color: #dc3545;
    font-size: 13px;
    margin-top: 5px;
    display: block;
}

.is-invalid {
    border-color: #dc3545;
}

@media (max-width: 576px) {
    .auth-card {
        padding: 30px 20px;
    }
    
    .form-options {
        flex-direction: column;
        gap: 15px;
        align-items: flex-start;
    }
}
</style>
@endsection
