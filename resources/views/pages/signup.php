<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../../public/css/signup.css" />
    <title>signup</title>
  </head>
  <body>

    
    <div class="container">
      <!-- Left Side - Image and Animation -->
      <div class="left-side">
        <div class="image-content">
          <h1 class="welcome-text">Welcome to BiblioSchool</h1>
          <div class="animation-container">
            <img
              src="https://d4804za1f1gw.cloudfront.net/wp-content/uploads/sites/50/2018/11/hero.jpg"
              alt=""
              class="reading-kid"
            />
            <div class="floating-elements">
              <i class="fas fa-book"></i>
              <i class="fas fa-graduation-cap"></i>
              <i class="fas fa-pencil-alt"></i>
              <i class="fas fa-lightbulb"></i>
            </div>
          </div>
          <p class="tagline">Discover the joy of learning through reading</p>
        </div>
      </div>

      <!-- Right Side - Sign Up Form -->
      <div class="right-side">
        <div class="form-container">
          <h2>Create Account</h2>
          <p class="form-subtitle">Start your educational journey today</p>

          <form id="signupForm" onsubmit="return validateForm(event)">
            <div class="input-group">
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input
                  type="text"
                  id="fullname"
                  placeholder="Full Name"
                  required
                />
                <span class="error-message" id="fullname-error"></span>
              </div>

              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input
                  type="email"
                  id="email"
                  placeholder="Email Address"
                  required
                />
                <span class="error-message" id="email-error"></span>
              </div>

              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input
                  type="password"
                  id="password"
                  placeholder="Password"
                  required
                />
                <i class="fas fa-eye-slash password-toggle"></i>
                <span class="error-message" id="password-error"></span>
              </div>

              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input
                  type="password"
                  id="confirm-password"
                  placeholder="Confirm Password"
                  required
                />
                <i class="fas fa-eye-slash password-toggle"></i>
                <span class="error-message" id="confirm-password-error"></span>
              </div>
            </div>

            <div class="terms-container">
              <input type="checkbox" id="terms" required />
              <label for="terms">I agree to the Terms & Conditions</label>
            </div>

            <button type="submit" class="signup-btn">
              Sign Up
              <i class="fas fa-arrow-right"></i>
            </button>
          </form>

          <div class="social-signup">
            <p>Or sign up with</p>
            <div class="social-buttons">
              <button class="social-btn google">
                <i class="fab fa-google"></i>
              </button>
              <button class="social-btn facebook">
                <i class="fab fa-facebook-f"></i>
              </button>
              <button class="social-btn twitter">
                <i class="fab fa-twitter"></i>
              </button>
            </div>
          </div>

          <p class="login-link">
            Already have an account? <a href="./login.php">Login here</a>
          </p>
        </div>
      </div>
    </div>

 <script src="../../../public/js/signup.js"></script>


  </body>
</html>
