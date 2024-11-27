<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du produit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="h3">Détail du produit</h1>
            <nav>
                <a href="../html/catalog.php" class="text-white me-3 text-decoration-none">Retour au catalogue</a>
                <a href="../html/cart.php" class="text-white text-decoration-none">Panier</a>
            </nav>
        </div>
    </header>
    <main class="container my-5">
        <div class="row">
            <!-- Image du produit -->
            <div class="col-md-6">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/500x500" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/500x500" class="d-block w-100" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/500x500" class="d-block w-100" alt="Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Suivant</span>
                    </button>
                </div>
            </div>
            <!-- Détails du produit -->
            <div class="col-md-6">
                <h2>Nom du produit</h2>
                <p class="text-muted">Référence : #123456</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae lorem id erat vehicula consequat. Suspendisse potenti.</p>
                <h4 class="text-primary">Prix : 99€</h4>
                <div class="d-grid gap-2 mt-4">
                    <button class="btn btn-primary btn-lg">Ajouter au panier</button>
                </div>
            </div>
        </div>
        <hr class="my-5">
        <!-- Description supplémentaire -->
        <section>
            <h3>Description complète</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec lacinia leo non nisl dignissim, vel dictum lorem venenatis.</p>
        </section>
    </main>
    <footer class="bg-dark text-white py-3 text-center">
        <p>&copy; 2024 Mon E-commerce</p>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
