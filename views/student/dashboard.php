
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Étudiant</title>
</head>
<body>
    <h1>Bienvenue Étudiant !</h1>
    <p>Vous êtes connecté avec succès.</p>
    <p>Rôle : <?= $_SESSION['userRole'] ?? 'Non défini' ?></p>
</body>
</html>
