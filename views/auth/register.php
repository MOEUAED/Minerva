<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inscription | Minerva</title>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen p-4 py-10">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-slate-100">
        
        <div class="text-center mb-8">
            <div class="bg-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-blue-200">
                <span class="text-white text-3xl font-bold italic">M</span>
            </div>
            <h1 class="text-2xl font-bold text-slate-800 tracking-tight">Rejoindre Minerva</h1>
            <p class="text-slate-500 mt-2">Créez votre compte en quelques secondes</p>
        </div>

        <form method="POST" action="/register" class="space-y-5">
            

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Nom Complet</label>
                <input type="text" name="fullname" required 
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all placeholder-slate-400"
                    placeholder="Prénom et Nom">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Adresse Email</label>
                <input type="email" name="email" required 
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all placeholder-slate-400"
                    placeholder="nom@ecole.com">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Mot de passe</label>
                <input type="password" name="password" required 
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all placeholder-slate-400"
                    placeholder="••••••••">
            </div>

            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-blue-100 transition-all transform active:scale-[0.98] mt-2">
                Créer mon compte
            </button>
        </form>

        <div class="mt-8 text-center">
            <p class="text-sm text-slate-500">
                Vous avez déjà un compte ? 
                <a href="/login" class="text-blue-600 font-bold hover:underline transition-all">Se connecter</a>
            </p>
        </div>
    </div>

</body>
</html>