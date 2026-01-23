<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Travaux | Minerva</title>
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
            <a href="/teacher/dashboard"
                class="flex items-center space-x-3 hover:bg-slate-800 p-3 rounded-xl transition-all">
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
                class="flex items-center space-x-3 bg-blue-600 text-white p-3 rounded-xl transition-all shadow-lg shadow-blue-900/20">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span>Travaux</span>
            </a>
            <a href="/teacher/students"
                class="flex items-center space-x-3 hover:bg-slate-800 p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Absence</span>
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
                <h2 class="text-3xl font-bold text-slate-800">Gestion des Travaux</h2>
                <p class="text-slate-500">Assignez des devoirs et suivez les rendus par classe.</p>
            </div>
            <div class="flex space-x-4">
                <button onclick="openModal('workModal')"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-xl shadow-lg transition-all flex items-center space-x-2">
                    <span>+ Créer un travail</span>
                </button>
            </div>
        </header>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                <h3 class="font-bold text-slate-800">Derniers devoirs publiés</h3>
                <div class="text-sm text-slate-500">Total: <?= count($works ?? []) ?> travaux</div>
            </div>

            <div class="divide-y divide-slate-100">
                <?php if (!empty($works)): ?>
                    <?php foreach ($works as $work): ?>
                        <div class="p-6 hover:bg-slate-50 transition-colors group">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="h-12 w-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-800"><?= htmlspecialchars($work['title']) ?></h4>
                                        <div class="flex items-center space-x-3 text-xs mt-1">
                                            <span
                                                class="font-semibold text-blue-600"><?= htmlspecialchars($work['class_name']) ?></span>
                                            <span class="text-slate-400">•</span>
                                            <span class="text-slate-500 flex items-center italic">
                                                <svg class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                Deadline: <?= date('d/m/Y', strtotime($work['due_date'])) ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="text-right hidden sm:block">
                                        <p class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Remis</p>
                                        <p class="text-sm font-bold text-slate-800">12 / 24</p>
                                    </div>
                                    <button class="p-2 text-slate-400 hover:text-blue-600 transition-colors">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="p-20 text-center">
                        <div class="bg-slate-50 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="h-8 w-8 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <p class="text-slate-500 font-medium">Aucun travail n'a été créé pour le moment.</p>
                        <button onclick="openModal('workModal')"
                            class="text-blue-600 text-sm font-bold mt-2 hover:underline">Créer votre premier devoir</button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <div id="workModal" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center p-4 z-50">
        <form action="/teacher/createWork" method="POST" class="bg-white rounded-2xl p-8 max-w-md w-full shadow-2xl">
            <h3 class="text-xl font-bold mb-6 text-slate-800">Assigner un nouveau travail</h3>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Titre</label>
                    <input type="text" name="title" required placeholder="ex: Devoir de Mathématiques"
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Classe</label>
                    <select name="class_id" required
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                        <option value="">Choisir une classe</option>
                        <?php foreach ($classes as $class): ?>
                            <option value="<?= $class['id'] ?>"><?= htmlspecialchars($class['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Date limite</label>
                    <input type="date" name="due_date" required
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Instructions (Optionnel)</label>
                    <textarea name="description" rows="3"
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
            </div>

            <div class="flex space-x-3 mt-8">
                <button type="button" onclick="closeModal('workModal')"
                    class="flex-1 py-2.5 bg-slate-100 text-slate-600 rounded-xl font-bold hover:bg-slate-200">Annuler</button>
                <button type="submit"
                    class="flex-1 py-2.5 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition-all">Publier</button>
            </div>
        </form>
    </div>

    <script>
        function openModal(id) { document.getElementById(id).classList.remove('hidden'); }
        function closeModal(id) { document.getElementById(id).classList.add('hidden'); }
    </script>
</body>

</html>
message.txt
11 Ko