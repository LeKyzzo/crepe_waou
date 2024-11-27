<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../../public/style.css">
</head>
<body>
    <header>
        <h1>Inscription</h1>
        <nav>
            <a href="../home.php">Accueil</a>
            <a href="../html/catalog.php">Catalogue</a>
            <a href="../html/login.php">Connexion</a>
        </nav>
    </header>
    <main>
        <form>
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Créer un compte</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Mon E-commerce</p>
    </footer>
</body>
</html>
