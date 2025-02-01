<?php



// use App\Config\Database;

// require_once __DIR__ . '/../../../app/config/database.php';

// try {
//     $db = Database::getInstance();
//     $pdo = $db->getPdo();

//     echo "concted";
// } catch (PDOException $e) {
//     echo "dont conectredd" . $e->getMessage();
// }




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../public/css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>biblio home</title>
</head>


</head>

<body>


    <?php include __DIR__. '/../components/navbar.php' ;?>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Left Content -->
                <div class="col-lg-6 hero-content">
                    <div class="content-wrapper">
                        <!-- Elegant Subtitle -->
                        <div class="subtitle-wrapper">
                            <div class="subtitle-line">
                                <span class="line"></span>
                                <span class="dot"></span>
                            </div>
                            <span class="subtitle">Bibliothèque Nationale du Maroc</span>
                        </div>

                        <!-- Main Title -->
                        <h1 class="main-title">
                            Découvrez l'excellence
                            <span class="title-accent">littéraire</span>
                            <span class="title-description">Une collection unique de savoir et de culture</span>
                        </h1>

                        <!-- Description -->
                        <p class="description">
                            Explorez notre prestigieuse collection de plus de 25,000 ouvrages soigneusement
                            sélectionnés. Une expérience de lecture enrichissante vous attend dans un cadre
                            d'exception.
                        </p>

                        <!-- Statistics -->
                        <div class="stats-container">
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="stat-content">
                                    <span class="number">25K+</span>
                                    <span class="label">Ouvrages disponibles</span>
                                </div>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="stat-content">
                                    <span class="number">12K+</span>
                                    <span class="label">Membres actifs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Image Section -->
                <div class="col-lg-6 hero-image">
                    <div class="image-container">
                        <!-- Main Image -->
                        <div class="main-image">
                            <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570" alt="Library Interior">
                            <div class="image-overlay"></div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="decorative-frame"></div>
                        <div class="decorative-pattern"></div>

                        <!-- Feature Card -->
                        <div class="feature-card">
                            <div class="card-icon">
                                <i class="fas fa-book-reader"></i>
                            </div>
                            <div class="card-content">
                                <h4>Accès Privilégié</h4>
                                <p>Service disponible 24/7</p>
                            </div>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Hero Section -->
    <section class="search-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="search-wrapper">
                        <h2 class="search-title">Trouvez votre livre préféré</h2>
                        <div class="search-box">
                            <i class="fas fa-search search-icon"></i>
                            <input type="text" class="search-input" placeholder="Rechercher par titre, auteur...">
                            <button class="search-button">
                                <span>Rechercher</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="biobliotheknemirique">
        <div class="container">
            <div class="digital-library-content">
                <!-- Left Content -->
                <div class="digital-info">
                    <h2>Bibliothèque Numérique</h2>
                    <p>Découvrez notre collection numérique complète. Accédez à des milliers de livres, articles et ressources éducatives en quelques clics.</p>

                </div>
                <button class="explore-btn">
                    <i class="fas fa-arrow-right"></i>
                    <span>Explorer la bibliothèque</span>
                </button>

            </div>
        </div>
    </section>

    <!-- Latest Books -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Latest Additions</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="book-card">
                        <div class="book-card-img">
                            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c" alt="Book Cover">
                            <div class="overlay">
                                <i class="fas fa-book-open"></i>
                                <span>Available</span>
                            </div>
                        </div>
                        <div class="book-card-body">
                            <div class="book-tag">Computer Science</div>
                            <h5>Data Structures</h5>
                            <p>Essential guide to algorithms and data structures</p>
                            <div class="book-info">
                                <span><i class="fas fa-user"></i> John Smith</span>
                                <span><i class="fas fa-calendar"></i> 2023</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="book-card">
                        <div class="book-card-img">
                            <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765" alt="Book Cover">
                            <div class="overlay">
                                <i class="fas fa-book-open"></i>
                                <span>Available</span>
                            </div>
                        </div>
                        <div class="book-card-body">
                            <div class="book-tag">Web Development</div>
                            <h5>Modern Web Development</h5>
                            <p>Complete guide to modern web technologies</p>
                            <div class="book-info">
                                <span><i class="fas fa-user"></i> Sarah Johnson</span>
                                <span><i class="fas fa-calendar"></i> 2023</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="book-card">
                        <div class="book-card-img">
                            <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6" alt="Book Cover">
                            <div class="overlay">
                                <i class="fas fa-book-open"></i>
                                <span>Available</span>
                            </div>
                        </div>
                        <div class="book-card-body">
                            <div class="book-tag">Artificial Intelligence</div>
                            <h5>AI Fundamentals</h5>
                            <p>Introduction to AI and Machine Learning</p>
                            <div class="book-info">
                                <span><i class="fas fa-user"></i> Michael Chen</span>
                                <span><i class="fas fa-calendar"></i> 2023</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="book-card">
                        <div class="book-card-img">
                            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c" alt="Book Cover">
                            <div class="overlay">
                                <i class="fas fa-book-open"></i>
                                <span>Available</span>
                            </div>
                        </div>
                        <div class="book-card-body">
                            <div class="book-tag">Mathematics</div>
                            <h5>Advanced Calculus</h5>
                            <p>Comprehensive guide to calculus concepts</p>
                            <div class="book-info">
                                <span><i class="fas fa-user"></i> David Wilson</span>
                                <span><i class="fas fa-calendar"></i> 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__.'/../components/footer.php' ;?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>



</html>