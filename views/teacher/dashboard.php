<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard Enseignant | Minerva</title>
</head>

<body class="bg-slate-100 min-h-screen flex">

    <aside class="w-64 bg-slate-900 text-slate-300 flex-shrink-0 hidden md:flex flex-col">
        <div class="p-6">
            <div class="flex items-center space-x-3 text-white">
                <div class="bg-blue-600 p-2 rounded-lg font-bold italic text-xl">M</div>
                <span class="text-xl font-bold tracking-tight">Minerva</span>
            </div>
        </div>
        <nav class="flex-1 mt-4 px-4 space-y-2">
            <a href="#" class="flex items-center space-x-3 bg-blue-600 text-white p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span>Dashboard</span>
            </a>
            <a href="/teacher/classes"
                class="flex items-center space-x-3 hover:bg-slate-800 p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <span>Mes Classes</span>
            </a>
            <a href="/teacher/works"
                class="flex items-center space-x-3 hover:bg-slate-800 p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span>Travaux</span>
            </a>
            <a href="/teacher/attendance"
                class="flex items-center space-x-3 hover:bg-slate-800 p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Absence</span>
            </a>
            <!-- Soumissions -->
            <a href="/teacher/submissions"
                class="flex items-center space-x-3 <?= $_SERVER['REQUEST_URI'] === '/teacher/submissions' ? 'bg-blue-600 text-white' : 'hover:bg-slate-800' ?> p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <span>Soumissions</span>
            </a>

            <!-- Notes -->
            <a href="/teacher/grades"
                class="flex items-center space-x-3 <?= $_SERVER['REQUEST_URI'] === '/teacher/grades' ? 'bg-blue-600 text-white' : 'hover:bg-slate-800' ?> p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                <span>Notes</span>
            </a>

            <!-- Chat -->
            <a href="/teacher/chat"
                class="flex items-center space-x-3 <?= $_SERVER['REQUEST_URI'] === '/teacher/chat' ? 'bg-blue-600 text-white' : 'hover:bg-slate-800' ?> p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <span>Chat</span>
            </a>

            <!-- Statistiques -->
            <a href="/teacher/statistics"
                class="flex items-center space-x-3 <?= $_SERVER['REQUEST_URI'] === '/teacher/statistics' ? 'bg-blue-600 text-white' : 'hover:bg-slate-800' ?> p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span>Statistiques</span>
            </a>
        </nav>
        <div class="p-4 border-t border-slate-800">
            <a href="/logout" class="flex items-center space-x-3 text-red-400 hover:text-red-300 p-3">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span>Déconnexion</span>
            </a>
        </div>
    </aside>

    <main class="flex-1 overflow-y-auto p-8">
        <header class="flex justify-between items-center mb-10">
            <div>
                <h2 class="text-3xl font-bold text-slate-800">Bonjour, <?= $_SESSION['userNom'] ?>
                </h2>
                <p class="text-slate-500">Voici ce qui se passe dans vos classes aujourd'hui.</p>
            </div>
            <div class="flex space-x-4">
                <button onclick="openModal('classModal')"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-xl shadow-lg transition-all flex items-center space-x-2">
                    <span>+ Nouvelle Classe</span>
                </button>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <p class="text-slate-500 text-sm font-medium">Total Étudiants</p>
                <p class="text-3xl font-bold text-slate-800 mt-1">128</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <p class="text-slate-500 text-sm font-medium">Classes Actives</p>
                <p class="text-3xl font-bold text-blue-600 mt-1">6</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <p class="text-slate-500 text-sm font-medium">Travaux à corriger</p>
                <p class="text-3xl font-bold text-orange-500 mt-1">12</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <section class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <h3 class="text-xl font-bold text-slate-800 mb-6">Inscrire un étudiant</h3>

                <!-- Messages de succès -->
                <?php if (isset($_SESSION['success_message'])): ?>
                    <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl mb-4">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <?= htmlspecialchars($_SESSION['success_message'] . $_SESSION['envoye'] ) ?>
                            
                        </div>
                    </div>
                    <?php unset($_SESSION['success_message']); ?>
                <?php endif; ?>

                <!-- Messages d'erreur -->
                <?php if (isset($_SESSION['error_message'])): ?>
                    <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-xl mb-4">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <?= htmlspecialchars($_SESSION['error_message']) ?>
                        </div>
                    </div>
                <?php endif; ?>

                <form action="/teacher/addStudent" method="POST" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Nom Complet</label>
                        <input type="text" name="fullname" required
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Email</label>
                        <input type="email" name="email" required
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Classe</label>
                        <select name="class_id"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none bg-white"
                            required>

                            <option value="">Sélectionner une classe</option>

                            <?php foreach ($classe as $class): ?>
                                <option value="<?= $class['id'] ?>">
                                    <?= htmlspecialchars($class['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button
                        class="w-full bg-slate-800 text-white font-bold py-3 rounded-xl hover:bg-slate-700 transition-all">
                        Créer le compte étudiant
                    </button>
                </form>
            </section>

            <?php if (!empty($classes)): ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php foreach ($classes as $class): ?>
                        <a href="/teacher/works?class_id=<?= $class['id'] ?>"
                            class="group bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex justify-between items-center cursor-pointer">
                            <div class="flex items-center space-x-4">
                                <!-- Icon -->
                                <div
                                    class="h-12 w-12 flex items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white font-bold text-sm shadow">
                                    <?= strtoupper(substr($class['name'], 0, 2)); ?>
                                </div>
                                <!-- Info -->
                                <div>
                                    <h4 class="font-bold text-slate-800 text-base group-hover:text-blue-600 transition">
                                        <?= htmlspecialchars($class['name']) ?>
                                    </h4>
                                    <p class="text-xs text-slate-500">
                                        Voir les travaux
                                    </p>
                                </div>
                            </div>
                            <!-- Arrow -->
                            <div class="text-slate-400 group-hover:text-blue-600 transition">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-10">
                    <p class="text-slate-500 text-sm">
                        Vous n'avez pas encore de classes
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <div id="classModal" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center p-4">
        <form action="/teacher/create-classes" method="POST" class="bg-white rounded-2xl p-8 max-w-sm w-full">

            <h3 class="text-xl font-bold mb-4">Créer une classe</h3>

            <input type="text" name="class_name" required placeholder="Nom de la classe (ex: Terminale A)"
                class="w-full px-4 py-2.5 rounded-xl border mb-4 outline-none focus:ring-2 focus:ring-blue-500">

            <div class="flex space-x-3">
                <button type="button" onclick="closeModal('classModal')"
                    class="flex-1 py-2 bg-slate-100 rounded-xl font-bold">
                    Annuler
                </button>

                <button type="submit"
                    class="flex-1 py-2 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-200">
                    Créer
                </button>
            </div>
        </form>
    </div>

    <script>
        function openModal(id) { document.getElementById(id).classList.remove('hidden'); }
        function closeModal(id) { document.getElementById(id).classList.add('hidden'); }
    </script>
</body>

</html>