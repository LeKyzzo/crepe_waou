<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../../../public/style.css">
</head>
<body>
    <header>
        <h1>Connexion</h1>
        <nav>
            <a href="../home.php">Accueil</a>
            <a href="../html/catalog.php">Catalogue</a>
            <a href="../html/register.php">Inscription</a>
        </nav>
    </header>
    <main>
        <form>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Se connecter</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Mon E-commerce</p>
    </footer>
</body>
</html>
