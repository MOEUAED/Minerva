<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ajouter un Étudiant | Minerva</title>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen py-10">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-lg border border-slate-100">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-800">Ajouter un nouvel étudiant</h1>
            <p class="text-slate-500 mt-2">Un email contenant ses identifiants lui sera envoyé automatiquement.</p>
        </div>

        <form action="/teacher/createStudent" method="POST" class="space-y-5">
            
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Nom Complet de l'étudiant</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <input type="text" name="fullname" required 
                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all"
                        placeholder="Jean Dupont">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Adresse Email académique</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </span>
                    <input type="email" name="email" required 
                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all"
                        placeholder="etudiant@ecole.com">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Assigner à une classe</label>
                <select name="class_id" required 
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:outline-none bg-white transition-all">
                    <option value="" disabled selected>Choisir une classe...</option>
                </select>
            </div>

            <div class="bg-blue-50 p-4 rounded-xl flex items-start space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-xs text-blue-700 leading-relaxed">
                    Le mot de passe sera <strong>généré aléatoirement</strong> et envoyé par mail. L'étudiant pourra le modifier lors de sa première connexion.
                </p>
            </div>

            <div class="flex gap-3 pt-4">
                <a href="/teacher/dashboard" class="flex-1 text-center px-4 py-3 rounded-xl border border-slate-200 text-slate-600 font-semibold hover:bg-slate-50 transition-all">
                    Annuler
                </a>
                <button type="submit" 
                    class="flex-[2] bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl shadow-lg shadow-blue-200 transition-all">
                    Inscrire l'étudiant
                </button>
            </div>
        </form>
    </div>

</body>
</html>