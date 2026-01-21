<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Connexion | Minerva</title>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-slate-100">
        
        <div class="text-center mb-10">
            <div class="bg-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-blue-200">
                <span class="text-white text-3xl font-bold italic">M</span>
            </div>
            <h1 class="text-2xl font-bold text-slate-800 tracking-tight">Minerva</h1>
            <p class="text-slate-500 mt-2">Veuillez vous identifier pour continuer</p>
        </div>

        <?php if (isset($error)): ?>
            <div class="mb-6 flex items-center bg-red-50 border-l-4 border-red-500 p-4 rounded-r-xl">
                <svg class="h-5 w-5 text-red-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-sm text-red-700 font-medium"><?= htmlspecialchars($error) ?></p>
            </div>
        <?php endif; ?>

        <form method="POST" action="/login" class="space-y-6">
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Adresse Email</label>
                <input type="email" name="email" required 
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all placeholder-slate-400"
                    placeholder="nom@ecole.com">
            </div>

            <div>
                <div class="flex justify-between mb-1">
                    <label class="block text-sm font-semibold text-slate-700">Mot de passe</label>
                    <a href="#" class="text-xs text-blue-600 hover:text-blue-800 transition-colors">Oublié ?</a>
                </div>
                <input type="password" name="password" required 
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all placeholder-slate-400"
                    placeholder="••••••••">
            </div>

            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-blue-100 transition-all transform active:scale-[0.98]">
                Se connecter
            </button>
        </form>
        <div class="mt-8 text-center">
            <p class="text-sm text-slate-500">
                Vous n'avez pas de compte ? 
                <a href="/register" class="text-blue-600 font-bold hover:underline transition-all">Enregistrer</a>
            </p>
        </div>

        <p class="mt-8 text-center text-sm text-slate-400">
            &copy; 2026 Minerva Edu. Tous droits réservés.
        </p>
    </div>
</body>
</html> 