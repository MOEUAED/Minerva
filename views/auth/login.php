<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Connexion | Minerva</title>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-6">

    <div class="max-w-4xl w-full bg-white rounded-[2rem] shadow-xl shadow-slate-200/60 overflow-hidden flex flex-col md:flex-row">
        
        <div class="md:w-1/2 bg-slate-900 p-12 text-white flex flex-col justify-between">
            <div>
                <div class="flex items-center space-x-3 mb-12">
                    <div class="bg-blue-600 p-2 rounded-lg font-bold italic text-xl">M</div>
                    <span class="text-2xl font-bold tracking-tight">Minerva</span>
                </div>
                <h1 class="text-4xl font-bold leading-tight mb-6">Gérez vos classes en toute simplicité.</h1>
                <p class="text-slate-400 text-lg">La plateforme moderne pour les enseignants et les étudiants de demain.</p>
            </div>
            <div class="hidden md:block">
                <div class="bg-slate-800/50 p-6 rounded-2xl border border-slate-700">
                    <p class="text-sm italic text-slate-300">"Minerva a transformé ma façon d'interagir avec mes étudiants. Tout est centralisé et rapide."</p>
                    <p class="text-xs font-bold mt-4 text-blue-400">— Prof. Ahmed B.</p>
                </div>
            </div>
        </div>

        <div class="md:w-1/2 p-12">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-slate-800">Bon retour !</h2>
                <p class="text-slate-500 mt-2">Connectez-vous pour accéder à votre espace.</p>
            </div>
            <?php if (isset($error)): ?>
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-xl mb-6 flex items-center shadow-sm animate-pulse">
                    <svg class="h-5 w-5 text-red-500 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-sm font-bold"><?= htmlspecialchars($error) ?></p>
                </div>
            <?php endif; ?>
            <form action="/login" method="POST" class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Adresse Email</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206"/></svg>
                        </span>
                        <input type="email" name="email" required placeholder="nom@ecole.com" 
                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50 transition-all">
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-2">
                        <label class="text-sm font-bold text-slate-700">Mot de passe</label>
                        <a href="#" class="text-xs font-bold text-blue-600 hover:underline">Oublié ?</a>
                    </div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </span>
                        <input type="password" name="password" required placeholder="••••••••" 
                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50 transition-all">
                    </div>
                </div>

                <button type="submit" 
                    class="w-full py-4 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition-all transform hover:-translate-y-0.5">
                    Se connecter
                </button>
            </form>

            <p class="text-center mt-10 text-slate-500 text-sm">
                Pas encore de compte ? <a href="/register" class="text-blue-600 font-bold hover:underline">S'inscrire</a>
            </p>
        </div>
    </div>

</body>
</html>