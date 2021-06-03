<html>
<head>
    <title>Insecure Deserialization - Exercice 1</title>
</head>
<body>
    <h1>Bienvenue sur la page d'accueil <?= $user->getUsername() ?></h1>

    <?php if($user->isAdmin()): ?>
    <h2>Vous êtes administrateur.</h2>
        <form action="" method="post">
            <label for="newImportantData">Ajouter une données importante en base :</label>
            <input type="text" name="important_data" id="newImportantData">
            <input type="submit" value="Ajouter">
        </form>
    <?php endif; ?>
</body>
</html>
