<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="h3">Catalogue des produits</h1>
            <nav>
                <a href="../home.php" class="text-white me-3 text-decoration-none">Accueil</a>
                <a href="../html/cart.php" class="text-white text-decoration-none">Panier</a>
            </nav>
        </div>
    </header>
    <main class="container my-5">
        <h2 class="mb-4">Découvrez nos produits</h2>
        <div class="row g-4">
            <!-- Produit 1 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produit 1">
                    <div class="card-body">
                        <h5 class="card-title">Produit 1</h5>
                        <p class="card-text">Description courte du produit. Lorem ipsum dolor sit amet.</p>
                        <h6 class="text-primary">Prix : 99€</h6>
                        <a href="../html/product.php" class="btn btn-primary w-100">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Produit 2 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produit 2">
                    <div class="card-body">
                        <h5 class="card-title">Produit 2</h5>
                        <p class="card-text">Description courte du produit. Proin vitae lorem id vehicula.</p>
                        <h6 class="text-primary">Prix : 79€</h6>
                        <a href="../html/product.php" class="btn btn-primary w-100">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Produit 3 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produit 3">
                    <div class="card-body">
                        <h5 class="card-title">Produit 3</h5>
                        <p class="card-text">Description courte du produit. Suspendisse potenti.</p>
                        <h6 class="text-primary">Prix : 120€</h6>
                        <a href="../html/product.php" class="btn btn-primary w-100">Voir les détails</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-white py-3 text-center">
        <p>&copy; 2024 Mon E-commerce</p>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
