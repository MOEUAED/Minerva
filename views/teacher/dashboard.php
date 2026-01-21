<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Enseignant</title>
</head>
<body>
    <h1>Bienvenue Enseignant !</h1>
    <p>Vous êtes connecté avec succès.</p>
    <p>Rôle : <?= $_SESSION['userRole'] ?? 'Non défini' ?></p>
    <p>ID : <?= $_SESSION['userId'] ?? 'Non défini' ?></p>
</body>
</html>