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
        <!-- Logo -->
        <div class="p-6">
            <div class="flex items-center space-x-3 text-white">
                <div class="bg-blue-600 p-2 rounded-lg font-bold italic text-xl">M</div>
                <span class="text-xl font-bold tracking-tight">Minerva</span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 mt-4 px-4 space-y-2">
            <!-- Dashboard -->
            <a href="/teacher/dashboard"
                class="flex items-center space-x-3 <?= $_SERVER['REQUEST_URI'] === '/teacher/dashboard' ? 'bg-blue-600 text-white' : 'hover:bg-slate-800' ?> p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span>Dashboard</span>
            </a>

            <!-- Mes Classes -->
            <a href="/teacher/classes"
                class="flex items-center space-x-3 <?= $_SERVER['REQUEST_URI'] === '/teacher/classes' ? 'bg-blue-600 text-white' : 'hover:bg-slate-800' ?> p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <span>Mes Classes</span>
            </a>

            <!-- Travaux -->
            <a href="/teacher/works"
                class="flex items-center space-x-3 <?= $_SERVER['REQUEST_URI'] === '/teacher/works' ? 'bg-blue-600 text-white' : 'hover:bg-slate-800' ?> p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span>Travaux</span>
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

            <!-- Présences -->
            <a href="/teacher/attendance"
                class="flex items-center space-x-3 <?= $_SERVER['REQUEST_URI'] === '/teacher/attendance' ? 'bg-blue-600 text-white' : 'hover:bg-slate-800' ?> p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span>Présences</span>
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

        <!-- Profil et Déconnexion -->
        <div class="p-4 border-t border-slate-800 space-y-2">
            <!-- Profil utilisateur -->
            <div class="flex items-center space-x-3 p-3 rounded-xl bg-slate-800/50">
                <div
                    class="h-8 w-8 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                    <?= strtoupper(substr($_SESSION['userNom'] ?? 'T', 0, 1)) ?>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-white truncate">
                        <?= htmlspecialchars($_SESSION['userNom'] ?? 'Enseignant') ?></p>
                    <p class="text-xs text-slate-400">Enseignant</p>
                </div>
            </div>

            <!-- Déconnexion -->
            <a href="/logout"
                class="flex items-center space-x-3 text-red-400 hover:text-red-300 hover:bg-red-900/20 p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span>Déconnexion</span>
            </a>
        </div>
    </aside>


    <main class="flex-1 overflow-y-auto p-8">
        <!-- Header -->
        <header class="flex justify-between items-center mb-10">
            <div>
                <h2 class="text-3xl font-bold text-slate-800">Gestion des Travaux</h2>
                <p class="text-slate-500">Assignez des devoirs et suivez les rendus par classe.</p>
            </div>
            <button onclick="openModal('workModal')"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-xl shadow-lg transition-all">
                + Créer un travail
            </button>
        </header>

        <!-- Messages -->
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl mb-6">
                <?= htmlspecialchars($_SESSION['success_message']) ?>
            </div>
            <?php unset($_SESSION['success_message']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-xl mb-6">
                <?= htmlspecialchars($_SESSION['error_message']) ?>
            </div>
            <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>

        <!-- Grille des travaux -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php if (!empty($works)): ?>
                <?php foreach ($works as $work): ?>
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 hover:shadow-md transition-all">
                        <!-- En-tête du travail -->
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-3">
                                <div class="h-10 w-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center">
                                    <?php
                                    $icons = [
                                        'document' => '📄',
                                        'lecon' => '📚',
                                        'exercice' => '✏️'
                                    ];
                                    echo $icons[$work['work']] ?? '📄';
                                    ?>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-800 text-lg"><?= htmlspecialchars($work['title']) ?></h3>
                                    <p class="text-sm text-blue-600 font-medium">
                                        <?= htmlspecialchars($work['class_name'] ?? 'Classe inconnue') ?></p>
                                </div>
                            </div>
                            <span
                                class="px-2 py-1 text-xs font-bold rounded-full 
                                <?= $work['work'] === 'document' ? 'bg-blue-100 text-blue-800' :
                                    ($work['work'] === 'lecon' ? 'bg-green-100 text-green-800' : 'bg-orange-100 text-orange-800') ?>">
                                <?= ucfirst($work['work']) ?>
                            </span>
                        </div>

                        <!-- Description -->
                        <?php if (!empty($work['description'])): ?>
                            <p class="text-slate-600 text-sm mb-4 line-clamp-3"><?= htmlspecialchars($work['description']) ?></p>
                        <?php endif; ?>

                        <!-- Informations -->
                        <div class="space-y-2 mb-4">
                            <?php if (!empty($work['deadline'])): ?>
                                <div class="flex items-center text-sm text-slate-500">
                                    <span class="font-medium">Deadline:</span>
                                    <span class="ml-2"><?= date('d/m/Y H:i', strtotime($work['deadline'])) ?></span>
                                </div>
                            <?php endif; ?>

                            <div class="flex items-center text-sm text-slate-500">
                                <span class="font-medium">Créé le:</span>
                                <span class="ml-2"><?= date('d/m/Y', strtotime($work['created_at'])) ?></span>
                            </div>

                            <?php if (!empty($work['file_path'])): ?>
                                <div class="flex items-center text-sm text-blue-600">
                                    <span class="font-medium">📎 Fichier joint</span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Actions futures -->
                        <div class="flex space-x-2 pt-4 border-t border-slate-100">
                            <button
                                class="flex-1 bg-slate-100 hover:bg-slate-200 text-slate-700 py-2 px-3 rounded-lg text-sm font-medium transition-all">
                                Voir détails
                            </button>
                            <button
                                class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-3 rounded-lg text-sm font-medium transition-all">
                                Gérer
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-20">
                    <div class="bg-slate-50 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">📚</span>
                    </div>
                    <p class="text-slate-500 font-medium">Aucun travail créé pour le moment.</p>
                    <button onclick="openModal('workModal')" class="text-blue-600 text-sm font-bold mt-2 hover:underline">
                        Créer votre premier devoir
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <!-- Modal de création -->
    <div id="workModal" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center p-4 z-50">
        <form action="/teacher/works" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-2xl p-8 max-w-lg w-full shadow-2xl max-h-[90vh] overflow-y-auto">
            <h3 class="text-xl font-bold mb-6 text-slate-800">Créer un nouveau travail</h3>

            <div class="space-y-4">
                <!-- Titre -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Titre *</label>
                    <input type="text" name="title" required placeholder="ex: Devoir de Mathématiques"
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Type de travail -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Type de travail *</label>
                    <select name="work" required
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                        <option value="">Choisir un type</option>
                        <option value="document">📄 Document</option>
                        <option value="lecon">📚 Leçon</option>
                        <option value="exercice">✏️ Exercice</option>
                    </select>
                </div>

                <!-- Classe -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Classe *</label>
                    <select name="class_id" required
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                        <option value="">Choisir une classe</option>
                        <?php if (!empty($classes)): ?>
                            <?php foreach ($classes as $class): ?>
                                <option value="<?= $class['id'] ?>"><?= htmlspecialchars($class['name']) ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Description</label>
                    <textarea name="description" rows="3" placeholder="Instructions pour les étudiants..."
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <!-- Date limite -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Date et heure limite</label>
                    <input type="datetime-local" name="deadline"
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Fichier -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Fichier joint (optionnel)</label>
                    <input type="file" name="work_file" accept=".pdf,.doc,.docx,.txt,.jpg,.png"
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="text-xs text-slate-500 mt-1">Formats acceptés: PDF, DOC, DOCX, TXT, JPG, PNG</p>
                </div>
            </div>

            <div class="flex space-x-3 mt-8">
                <button type="button" onclick="closeModal('workModal')"
                    class="flex-1 py-2.5 bg-slate-100 text-slate-600 rounded-xl font-bold hover:bg-slate-200">
                    Annuler
                </button>
                <button type="submit"
                    class="flex-1 py-2.5 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition-all">
                    Créer le travail
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