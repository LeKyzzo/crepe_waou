<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon E-commerce</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="h3">Bienvenue sur Mon E-commerce</h1>
            <nav class="d-flex justify-content-between">
                <div>
                    <a href="home.php" class="text-white me-3 text-decoration-none">Accueil</a>
                    <a href="html/catalog.php" class="text-white me-3 text-decoration-none">Catalogue</a>
                    <a href="html/cart.php" class="text-white text-decoration-none">Panier</a>
                </div>
                <div>
                    <a href="html/login.php" class="text-white me-3 text-decoration-none">Connexion</a>
                    <a href="html/register.php" class="text-white text-decoration-none">Inscription</a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <!-- Bannière principale -->
        <section class="bg-primary text-white py-5 text-center">
            <div class="container">
                <h2>Les meilleures offres du moment</h2>
                <p>Découvrez des produits incroyables à des prix compétitifs.</p>
                <a href="html/catalog.php" class="btn btn-light btn-lg mt-3">Voir le catalogue</a>
            </div>
        </section>
        <!-- Produits phares -->
        <section class="container my-5">
            <h2 class="mb-4">Produits phares</h2>
            <div class="row g-4">
                <!-- Produit 1 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produit 1">
                        <div class="card-body">
                            <h5 class="card-title">Produit 1</h5>
                            <p class="card-text">Description courte du produit phare.</p>
                            <h6 class="text-primary">Prix : 99€</h6>
                            <a href="html/product.php" class="btn btn-primary w-100">Voir les détails</a>
                        </div>
                    </div>
                </div>
                <!-- Produit 2 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produit 2">
                        <div class="card-body">
                            <h5 class="card-title">Produit 2</h5>
                            <p class="card-text">Une offre à ne pas manquer.</p>
                            <h6 class="text-primary">Prix : 79€</h6>
                            <a href="html/product.php" class="btn btn-primary w-100">Voir les détails</a>
                        </div>
                    </div>
                </div>
                <!-- Produit 3 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produit 3">
                        <div class="card-body">
                            <h5 class="card-title">Produit 3</h5>
                            <p class="card-text">Une exclusivité de notre boutique.</p>
                            <h6 class="text-primary">Prix : 120€</h6>
                            <a href="html/product.php" class="btn btn-primary w-100">Voir les détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Catégories -->
        <section class="bg-light py-5">
            <div class="container">
                <h2 class="mb-4">Nos catégories</h2>
                <div class="row text-center g-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Électronique</h5>
                                <p class="card-text">Découvrez nos produits high-tech.</p>
                                <a href="html/catalog.php" class="btn btn-outline-primary">Explorer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Mode</h5>
                                <p class="card-text">Tendances et nouveautés vestimentaires.</p>
                                <a href="html/catalog.php" class="btn btn-outline-primary">Explorer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Maison</h5>
                                <p class="card-text">Améliorez votre confort chez vous.</p>
                                <a href="html/catalog.php" class="btn btn-outline-primary">Explorer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-dark text-white py-3 text-center">
        <p>&copy; 2024 Mon E-commerce</p>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
