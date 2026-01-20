    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Inscription | Minerva</title>
    </head>
    <body class="bg-slate-50 flex items-center justify-center min-h-screen py-10">

        <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-lg border border-slate-100">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-slate-800">Créer un compte</h1>
                <p class="text-slate-500 mt-2">Rejoignez votre établissement en quelques clics</p>
            </div>

            <form action="/auth/register" method="POST" class="space-y-5">
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <label class="relative cursor-pointer">
                        <input type="radio" name="role" value="student" class="peer sr-only" checked>
                        <div class="p-4 border-2 border-slate-100 rounded-xl bg-slate-50 text-center transition-all peer-checked:border-blue-600 peer-checked:bg-blue-50">
                            <span class="block text-2xl mb-1">🎓</span>
                            <span class="block text-sm font-semibold text-slate-700">Étudiant</span>
                        </div>
                    </label>
                    <label class="relative cursor-pointer">
                        <input type="radio" name="role" value="teacher" class="peer sr-only">
                        <div class="p-4 border-2 border-slate-100 rounded-xl bg-slate-50 text-center transition-all peer-checked:border-blue-600 peer-checked:bg-blue-50">
                            <span class="block text-2xl mb-1">👨‍🏫</span>
                            <span class="block text-sm font-semibold text-slate-700">Enseignant</span>
                        </div>
                    </label>
                </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Full Name</label>
                        <input type="text" name="fullname" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Adresse Email</label>
                    <input type="email" name="email" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="nom@ecole.com">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Mot de passe</label>
                    <input type="password" name="password" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="••••••••">
                </div>

                <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl shadow-lg transition-all mt-4">
                    Créer mon compte
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-slate-600">
                    Déjà membre ? 
                    <a href="/auth/login" class="text-blue-600 font-semibold hover:underline">Se connecter</a>
                </p>
            </div>
        </div>

    </body>
    </html>