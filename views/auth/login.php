<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Connexion | Minerva</title>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-slate-100">
        <div class="text-center mb-10">
            <div class="bg-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-slate-800">Bienvenue</h1>
            <p class="text-slate-500 mt-2">Connectez-vous à votre espace éducatif</p>
        </div>

        <form action="/auth/login" method="POST" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Adresse Email</label>
                <input type="email" name="email" required 
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                    placeholder="exemple@ecole.com">
            </div>

            <div>
                <div class="flex justify-between mb-1">
                    <label class="block text-sm font-medium text-slate-700">Mot de passe</label>
                    
                </div>
                <input type="password" name="password" required 
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                    placeholder="••••••••">
            </div>

            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl shadow-lg shadow-blue-200 transition-all transform hover:-translate-y-0.5">
                Se connecter
            </button>
        </form>

        <div class="mt-8 text-center">
            <p class="text-sm text-slate-600">
                Pas encore de compte ? 
                <a href="/auth/register" class="text-blue-600 font-semibold hover:underline">S'inscrire</a>
            </p>
        </div>
    </div>

</body>
</html>