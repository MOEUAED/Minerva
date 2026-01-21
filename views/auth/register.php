<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscription - Minerva</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: 50px auto; }
        .form-group { margin: 15px 0; }
        input, select { width: 100%; padding: 10px; margin: 5px 0; }
        button { background: #28a745; color: white; padding: 10px 20px; border: none; cursor: pointer; }
        .error { color: red; background: #ffe6e6; padding: 10px; margin: 10px 0; border: 1px solid red; }
    </style>
</head>
<body>
    <h2>Inscription - Minerva</h2>
    
    <?php if (isset($error)): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    
    <form method="POST" action="/register">
        <div class="form-group">
            <label for="fullname">Nom complet:</label>
            <input type="text" id="fullname" name="fullname" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <div class="form-group">
            <label for="role">Rôle:</label>
            <select id="role" name="role">
                <option value="student">Étudiant</option>
                <option value="teacher">Enseignant</option>
            </select>
        </div>
        
        <button type="submit">S'inscrire</button>
        <p><a href="/login">Déjà inscrit ? Se connecter</a></p>
    </form>
</body>
</html>
