<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mes Classes | Minerva</title>
</head>
<body class="bg-slate-100 min-h-screen flex">

    <!-- Sidebar -->
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
            <a href="/teacher/classes" class="flex items-center space-x-3 bg-blue-600 text-white p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                <span>Mes Classes</span>
            </a>
            <a href="/teacher/works" class="flex items-center space-x-3 hover:bg-slate-800 p-3 rounded-xl transition-all">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
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
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                <span>Déconnexion</span>
            </a>
        </div>
    </aside>

    <!-- Main -->
    <main class="flex-1 overflow-y-auto p-8">
        <header class="flex justify-between items-center mb-10">
            <div>
                <h2 class="text-3xl font-bold text-slate-800">Mes Classes</h2>
                <p class="text-slate-500">Voici toutes vos classes et les étudiants inscrits.</p>
            </div>
        </header>

            <?php if (!empty($classes)): ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php foreach ($classes as $class): ?>
                        <a
                            href="/teacher/works?class_id=<?= $class['id'] ?>"
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
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5l7 7-7 7" />
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
    </main>

</body>
</html>
