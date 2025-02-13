<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../public/css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>navbar</title>
</head>


</head>
<body>


    <!-- navbar -->

    <nav class="navbar">
        <div class="nav-container">
          <!-- Left Side -->
          <div class="nav-left">
            <div class="logo-section">
              <i class="fas fa-book-reader logo-icon"></i>
              <h1>BiblioTech</h1>
            </div>
            <div class="nav-links">
              <a href="/" class="nav-link active">
                <i class="fas fa-home"></i>
                <span>Accueil</span>
              </a>
              <a href="/catalogue" class="nav-link">
                <i class="fas fa-book"></i>
                <span>Catalogue</span>
              </a>

              <a href="/aboutus" class="nav-link">
                <i class="fas fa-info-circle"></i>
                <span>About Us</span>
              </a>
              <a href="/contactus" class="nav-link">
                <i class="fas fa-info-circle"></i>
                <span>Contact US</span>
              </a>
              <a href="#" class="nav-link">
               
              </a>
            
               
             
              
            </div>
          </div>
  
          <!-- Right Side -->
          <div class="nav-right">

            <a href="#" class="nav-link">
               
            </a>
           
  
            <!-- Language Selector -->
            <div class="language-selector">
              <div class="selected-language" id="languageToggle">
                <img
                  src="https://flagcdn.com/w40/fr.png"
                  alt="French"
                  class="flag-icon"
                />
                <span class="language-title">FR</span>
                <i class="fas fa-chevron-down"></i>
              </div>
  
              <div class="language-dropdown" id="languageDropdown">
                <div class="language-option" data-lang="fr">
                  <img
                    src="https://flagcdn.com/w40/fr.png"
                    alt="French"
                    class="flag-icon"
                  />
                  <span>Français</span>
                </div>
                <div class="language-option" data-lang="en">
                  <img
                    src="https://flagcdn.com/w40/gb.png"
                    alt="English"
                    class="flag-icon"
                  />
                  <span>English</span>
                </div>
                <div class="language-option" data-lang="ar">
                  <img
                    src="https://flagcdn.com/w320/de.png"
                    alt="Deutsch"
                    class="flag-icon"
                  />
                  <span>Deutsch</span>
                </div>
              </div>
            </div>
  
            <!-- btn login signup-->
            <div id="btnloginlogout">
                <a href="/signup">
                    <button class="signup-btn">
                        Sign Up
                    </button>
                </a>
                <a href="/login">
                    <button class="login-btn">
                        Login
                    </button>
                </a>
            </div>
            

          </div>
        </div>
    </nav>


<script src="../../../public/js/langue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>



</html>