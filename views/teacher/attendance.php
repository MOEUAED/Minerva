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
            <a href="/teacher/absences" class="flex items-center space-x-3 bg-blue-600 text-white p-3 rounded-xl shadow-lg transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>Absences</span>
            </a>
        </nav>
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
        <form action="/teacher/saveAbsence" method="POST">
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