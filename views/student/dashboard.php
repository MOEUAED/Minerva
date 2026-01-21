<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Espace Étudiant | Minerva</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-[#f8fafc] min-h-screen flex">

    <aside class="w-72 bg-slate-900 text-slate-400 flex-shrink-0 hidden lg:flex flex-col border-r border-slate-800">
        <div class="p-8">
            <div class="flex items-center space-x-3 text-white">
                <div class="bg-indigo-600 h-10 w-10 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-500/20">
                    <span class="text-xl font-bold">M</span>
                </div>
                <span class="text-2xl font-bold tracking-tight">Minerva</span>
            </div>
        </div>
        
        <nav class="flex-1 px-6 space-y-1.5">
            <p class="px-4 text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-2">Menu Principal</p>
            <a href="#" class="flex items-center space-x-3 bg-indigo-600/10 text-indigo-400 p-3 rounded-xl border border-indigo-600/20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                <span class="font-semibold">Tableau de bord</span>
            </a>
            <a href="#" class="flex items-center space-x-3 hover:bg-slate-800 hover:text-slate-200 p-3 rounded-xl transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                <span>Mes Devoirs</span>
            </a>
            <a href="#" class="flex items-center space-x-3 hover:bg-slate-800 hover:text-slate-200 p-3 rounded-xl transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/></svg>
                <span>Messagerie</span>
            </a>
        </nav>

        <div class="p-6">
        <div class="p-4 border-t border-slate-800">
            <a href="/logout" class="flex items-center space-x-3 text-red-400 hover:text-red-300 p-3">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                <span>Déconnexion</span>
            </a>
        </div>
        </div>
    </aside>

    <main class="flex-1 p-4 lg:p-10">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 leading-tight">Dashboard Étudiant</h1>
                <p class="text-slate-500 font-medium">Bon retour, <span class="text-indigo-600 font-bold">Amine</span> 👋</p>
            </div>
            
            <div class="flex items-center space-x-4">
                <div class="relative hidden sm:block">
                    <input type="text" placeholder="Rechercher un cours..." class="pl-10 pr-4 py-2.5 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none w-64 text-sm transition-all">
                    <svg class="w-4 h-4 absolute left-3 top-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <div class="flex items-center space-x-3 bg-white p-1.5 pr-4 rounded-2xl border border-slate-200 shadow-sm">
                    <img class="h-9 w-9 rounded-xl object-cover" src="https://ui-avatars.com/api/?name=Amine+B&background=6366f1&color=fff" alt="Avatar">
                    <span class="text-sm font-bold text-slate-700 uppercase tracking-tighter">Etudiant</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-12 gap-8">
            
            <div class="xl:col-span-8 space-y-8">
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div class="bg-indigo-600 rounded-3xl p-6 text-white shadow-xl shadow-indigo-200">
                        <p class="text-indigo-100 text-sm font-medium">Moyenne Générale</p>
                        <p class="text-4xl font-black mt-2">16.8<span class="text-lg opacity-60">/20</span></p>
                    </div>
                    <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm">
                        <p class="text-slate-400 text-sm font-medium">Devoirs en attente</p>
                        <p class="text-4xl font-black text-slate-800 mt-2">04</p>
                    </div>
                    <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm">
                        <p class="text-slate-400 text-sm font-medium">Cours suivis</p>
                        <p class="text-4xl font-black text-slate-800 mt-2">12</p>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-xl font-bold text-slate-900">Devoirs Récents</h2>
                        <div class="flex space-x-2">
                            <span class="px-3 py-1 bg-indigo-50 text-indigo-600 rounded-full text-xs font-bold">Tous</span>
                            <span class="px-3 py-1 bg-slate-50 text-slate-400 rounded-full text-xs font-bold hover:bg-slate-100 cursor-pointer transition-all">Urgents</span>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="group flex flex-col sm:flex-row sm:items-center justify-between p-6 bg-slate-50 hover:bg-white border border-transparent hover:border-indigo-100 rounded-2xl transition-all hover:shadow-lg hover:shadow-indigo-500/5">
                            <div class="flex items-center space-x-5">
                                <div class="h-12 w-12 bg-white rounded-xl flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                    <span class="text-2xl">💻</span>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 group-hover:text-indigo-600 transition-colors">Développement Backend PHP</h3>
                                    <p class="text-xs text-slate-500 font-medium">M. El Amrani • Publié il y a 2h</p>
                                </div>
                            </div>
                            <div class="mt-4 sm:mt-0 flex items-center justify-between sm:justify-end gap-6">
                                <div class="text-right">
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-none">Date Limite</p>
                                    <p class="text-sm font-bold text-rose-500 mt-1 uppercase">Dans 2 jours</p>
                                </div>
                                <a href="#" class="px-5 py-2.5 bg-slate-900 text-white text-xs font-bold rounded-xl hover:bg-indigo-600 transition-colors shadow-lg shadow-slate-200">
                                    Rendre
                                </a>
                            </div>
                        </div>

                        <div class="group flex flex-col sm:flex-row sm:items-center justify-between p-6 bg-slate-50 hover:bg-white border border-transparent hover:border-indigo-100 rounded-2xl transition-all hover:shadow-lg hover:shadow-indigo-500/5">
                            <div class="flex items-center space-x-5">
                                <div class="h-12 w-12 bg-white rounded-xl flex items-center justify-center shadow-sm">
                                    <span class="text-2xl">🎨</span>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900">Design UI/UX - Projet Final</h3>
                                    <p class="text-xs text-slate-500 font-medium">Mme. Benjelloun • Publié hier</p>
                                </div>
                            </div>
                            <div class="mt-4 sm:mt-0 flex items-center justify-between sm:justify-end gap-6">
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-lg text-[10px] font-black uppercase">Terminé</span>
                                <div class="h-8 w-8 bg-indigo-50 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-4 space-y-8">
                
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-bold text-slate-900">Chat de Classe</h3>
                        <span class="flex h-2 w-2 rounded-full bg-green-500 ring-4 ring-green-100"></span>
                    </div>
                    <div class="space-y-4 mb-6 max-h-[200px] overflow-y-auto pr-2 custom-scrollbar">
                        <div class="flex items-start space-x-3">
                            <img class="h-8 w-8 rounded-lg" src="https://ui-avatars.com/api/?name=Sara+L" alt="">
                            <div class="bg-slate-50 p-3 rounded-2xl rounded-tl-none">
                                <p class="text-xs font-bold text-indigo-600">Sara</p>
                                <p class="text-xs text-slate-600 mt-1 italic">Est-ce qu'on doit envoyer le code sur GitHub ?</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <img class="h-8 w-8 rounded-lg" src="https://ui-avatars.com/api/?name=Ali+B" alt="">
                            <div class="bg-slate-50 p-3 rounded-2xl rounded-tl-none">
                                <p class="text-xs font-bold text-indigo-600">Ali</p>
                                <p class="text-xs text-slate-600 mt-1 italic">Oui, c'est ce que M. Amine a dit.</p>
                            </div>
                        </div>
                    </div>
                    <a href="/chat" class="block w-full text-center py-3 bg-indigo-50 text-indigo-600 text-xs font-black rounded-xl hover:bg-indigo-600 hover:text-white transition-all">
                        REJOINDRE LA DISCUSSION
                    </a>
                </div>

                <div class="bg-slate-900 rounded-3xl p-6 text-white overflow-hidden relative">
                    <div class="relative z-10">
                        <h3 class="font-bold text-sm mb-4 uppercase tracking-widest text-slate-400 italic">Enseignants</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <img class="h-10 w-10 rounded-xl border-2 border-slate-700" src="https://ui-avatars.com/api/?name=M+Amine&background=334155&color=fff" alt="">
                                <div>
                                    <p class="text-sm font-bold">M. Amine</p>
                                    <p class="text-[10px] text-slate-400">Web Development</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -right-4 -bottom-4 bg-indigo-600 h-24 w-24 rounded-full opacity-20 blur-2xl"></div>
                </div>

            </div>
        </div>
    </main>

</body>
</html>