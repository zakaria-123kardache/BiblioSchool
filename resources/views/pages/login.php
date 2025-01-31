<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioSchool - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/login.css">
</head>
<body>
    <div class="container">

        <div class="left-side">
            <div class="image-content">
                <h1 class="welcome-text">Welcome Back!</h1>
                <div class="animation-container">
                    <img src="https://d4804za1f1gw.cloudfront.net/wp-content/uploads/sites/50/2018/11/hero.jpg" alt="Student Reading" class="reading-student">
                    <div class="floating-elements">
                        <i class="fas fa-book"></i>
                        <i class="fas fa-graduation-cap"></i>
                        <i class="fas fa-pencil-alt"></i>
                        <i class="fas fa-lightbulb"></i>
                    </div>
                </div>
                <p class="tagline">Continue your learning journey</p>
            </div>
        </div>

        <div class="right-side">
            <div class="form-container">
                <h2>Login to BiblioSchool</h2>
                <p class="form-subtitle">Access your learning resources</p>

                <form id="loginForm" onsubmit="return validateForm(event)">
                    <div class="input-group">
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" placeholder="Email Address" required>
                            <span class="error-message" id="email-error"></span>
                        </div>

                        <div class="input-field">
                            <!-- <i class="fas fa-lock"></i> -->
                            <input type="password" id="password" placeholder="Password" required>
                            <i class="fas fa-eye-slash password-toggle"></i>
                            <span class="error-message" id="password-error"></span>
                        </div>
                    </div>

                    <div class="remember-forgot">
                        <label class="remember-me">
                            <input type="checkbox" id="remember">
                            <span>Remember me</span>
                        </label>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>

                    <button type="submit" class="login-btn">
                        Login
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </form>

                <div class="divider">
                    <span>or continue with</span>
                </div>

                <div class="social-login">
                    <button class="social-btn google">
                        <i class="fab fa-google"></i>
                        <span>Google</span>
                    </button>
                    <button class="social-btn facebook">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </button>
                </div>

                <p class="signup-link">
                    Don't have an account? <a href="/signup">Sign up</a>
                </p>
            </div>
        </div>
    </div>
    <script src="../../../public/js/login.js"></script>
</body>
</html>
