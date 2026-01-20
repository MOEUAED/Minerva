<!DOCTYPE html>
<html>

<head>
    <title>Minerva - Login</title>
    <style>
        body {
            font-family: Arial;
            max-width: 400px;
            margin: 50px auto;
        }

        .form-group {
            margin: 15px 0;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .error { 
        color: red; 
        background: #ffe6e6; 
        padding: 10px; 
        margin: 10px 0; 
        border: 1px solid red; 
        border-radius: 4px;
    }
    </style>
</head>

<body>
    <h2>Connexion - Minerva</h2>
    <?php if (isset($error)): ?>
        <div class="error">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>
    <form method="POST" action="/login">
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Mot de passe:</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Se connecter</button>
    </form>

</body>

</html>