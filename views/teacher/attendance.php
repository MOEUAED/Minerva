<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Gestion d'Absence | Minerva</title>
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
            <a href="/teacher/dashboard" class="flex items-center space-x-3 hover:bg-slate-800 p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <span>Dashboard</span>
            </a>
            <a href="/teacher/classes" class="flex items-center space-x-3 hover:bg-slate-800 p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
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
        <header class="flex justify-between items-end mb-10">
            <div>
                <h2 class="text-3xl font-bold text-slate-800">Appel de Présence</h2>
                <p class="text-slate-500 mt-1">Sélectionnez une classe pour marquer les absences du jour.</p>
            </div>
            <div class="text-right">
                <p class="text-sm font-bold text-slate-400 uppercase tracking-widest">Date d'aujourd'hui</p>
                <p class="text-lg font-bold text-blue-600"><?= date('d F Y') ?></p>
            </div>
        </header>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 mb-8">
            <form action="" method="GET" class="flex items-center space-x-4">
                <div class="flex-1">
                    <label class="block text-xs font-bold text-slate-400 uppercase mb-2 ml-1">Choisir la classe</label>
                    <select name="class_id" onchange="this.form.submit()" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 outline-none focus:ring-2 focus:ring-blue-500 font-semibold text-slate-700">
                        <option value="">-- Sélectionnez une classe --</option>
                        <?php foreach($classes as $class): ?>
                            <option value="<?= $class['id'] ?>" <?= (isset($_GET['class_id']) && $_GET['class_id'] == $class['id']) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($class['name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="pt-6">
                    <button type="button" class="px-6 py-3 bg-slate-800 text-white rounded-xl font-bold hover:bg-slate-700 transition-all">Actualiser</button>
                </div>
            </form>
        </div>

        <?php if(isset($_GET['class_id']) && !empty($students)): ?>
        <form action="/teacher/attendance" method="POST">
            <input type="hidden" name="class_id" value="<?= $_GET['class_id'] ?>">
            
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-100">
                            <th class="p-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Étudiant</th>
                            <th class="p-4 text-xs font-bold text-slate-400 uppercase tracking-wider text-center">Status</th>
                            <th class="p-4 text-xs font-bold text-slate-400 uppercase tracking-wider text-center">Action Rapide</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <?php foreach($students as $student): ?>
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="p-4">
                                <div class="flex items-center space-x-3">
                                    <div class="h-10 w-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-sm">
                                        <?= strtoupper(substr($student['fullname'], 0, 1)) ?>
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-800"><?= htmlspecialchars($student['fullname']) ?></p>
                                        <p class="text-xs text-slate-400"><?= htmlspecialchars($student['email']) ?></p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4 text-center">
                                <span id="badge-<?= $student['id'] ?>" class="px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-600">Présent</span>
                            </td>
                            <td class="p-4">
                                <div class="flex justify-center items-center space-x-2">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="absent_students[]" value="<?= $student['id'] ?>" class="sr-only peer" onchange="toggleStatus(this, '<?= $student['id'] ?>')">
                                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-500"></div>
                                        <span class="ml-3 text-sm font-medium text-slate-500">Marquer Absent</span>
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="sticky bottom-8 mt-10 flex justify-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-2xl shadow-2xl shadow-blue-300 transition-all flex items-center space-x-3 transform hover:scale-105 font-bold">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>Enregistrer les absences</span>
                </button>
            </div>
        </form>

        <?php elseif(isset($_GET['class_id'])): ?>
            <div class="bg-white border-2 border-dashed border-slate-200 rounded-3xl p-16 text-center">
                <p class="text-slate-500 font-medium">Aucun étudiant trouvé dans cette classe.</p>
            </div>
        <?php else: ?>
            <div class="bg-white border-2 border-dashed border-slate-200 rounded-3xl p-16 text-center">
                <div class="bg-blue-50 h-20 w-20 rounded-full flex items-center justify-center mx-auto mb-4 text-blue-300">
                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800">Prêt pour l'appel ?</h3>
                <p class="text-slate-500 mt-2">Veuillez sélectionner une classe en haut pour commencer.</p>
            </div>
        <?php endif; ?>
    </main>

    <script>
        function toggleStatus(checkbox, studentId) {
            const badge = document.getElementById('badge-' + studentId);
            if (checkbox.checked) {
                badge.innerText = 'Absent';
                badge.className = 'px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-600';
            } else {
                badge.innerText = 'Présent';
                badge.className = 'px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-600';
            }
        }
    </script>
</body>
</html>