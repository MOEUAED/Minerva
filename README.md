# 📘 Minerva – School Management System

Minerva est une application web MVC permettant la gestion complète d’une école : authentification, gestion des classes, travaux, évaluations, présence, et chat de groupe.
Le projet est réalisé en binômes sur **5 jours** sans utiliser Composer ou librairies externes.

---

## 📁 Structure du projet

```
/public
    index.php
    .htaccess

/app
    /core
        Router.php
        Controller.php
        Database.php   (Singleton)
        Auth.php       (Gestion des sessions + rôles)

    /controllers
        AuthController.php
        TeacherController.php
        StudentController.php
        ClassController.php
        WorkController.php
        SubmissionController.php
        AttendanceController.php
        ChatController.php

    /models
        User.php
        Teacher.php
        Student.php
        ClassModel.php
        Work.php
        Submission.php
        Attendance.php
        ChatMessage.php

    /views
        auth/
            login.php
            register.php
        teacher/
            dashboard.php
            classes.php
            create_class.php
            works.php
            create_work.php
            evaluate_work.php
            attendance.php
            statistics.php
        student/
            dashboard.php
            class.php
            works.php
            submit_work.php
            grades.php
        chat/
            chatroom.php
            messages.php    

/config
    database.php   (Identifiants DB)
```

---

## 🔧 Pré-requis

* PHP 8.x ou supérieur
* MySQL/MariaDB
* Apache (avec mod_rewrite activé)
* Navigateur moderne

---

## ⚙️ Installation

### 1️⃣ Cloner le projet

```
git clone git@github.com:MOEUAED/Minerva.git
```

### 2️⃣ Configurer la base de données

Modifier `/config/database.php` :

```php
return [
    'host' => 'localhost',
    'dbname' => 'minerva_db',
    'user' => 'root',
    'password' => ''
];
```

### 3️⃣ Importer le fichier SQL

Importez `minerva.sql` dans phpMyAdmin.

### 4️⃣ Configurer le Virtual Host (optionnel)

Configurez Apache pour pointer vers :

```
/public
```

---

## 🧩 Fonctionnalités principales

### ✔️ Authentification à deux rôles

* Login avec redirection automatique
* Sécurisation par hashing du mot de passe
* Gestion de session via `Auth.php`

### ✔️ Gestion des classes (enseignant)

* Créer une classe
* Voir la liste des classes
* Ajouter des étudiants à une classe

### ✔️ Gestion des étudiants

* Création par enseignant
* Mot de passe généré automatiquement
* Email (facultatif sans PHPMailer)

### ✔️ Travaux (assignation + gestion)

* Créer un travail (texte ou fichier)
* Assigner à un ou plusieurs étudiants

### ✔️ Évaluations

* Note + commentaire
* Étudiant peut voir ses notes

### ✔️ Présence / Absences

* Prof sélectionne les présents/absents
* Historique et statistiques

### ✔️ Statistiques

* Notes moyennes
* Nombre de travaux rendus
* Taux de présence

### ✔️ Chat de classe

* Messagerie de groupe
* Historique stocké en DB
* Rafraîchissement simple via AJAX

---

## 🧱 Architecture MVC

### 🟦 Models (Données)

Gèrent les requêtes PDO via Singleton Database.

### 🟩 Views (Interface)

PHP/HTML sans framework (pas de Twig obligatoire).

### 🟥 Controllers (Logique)

Appellent les services et chargent les vues.

---

## 🧠 Design Pattern utilisé

### 🟦 Singleton – Database

La classe Database crée **une seule instance PDO** pour toute l’application :



---

## 🧩 UML (obligatoire)

### Diagramme de cas d'utilisation

Acteurs :

* Étudiant
* Enseignant

Cas d'utilisation :

* Se connecter
* Gestion classes
* Gestion travaux
* Évaluations
* Consultations notes
* Chat

### Diagramme de classes

Classes principales :

* `User`
* `Teacher`
* `Student`
* `ClassModel`
* `Work`
* `Submission`
* `Attendance`
* `ChatMessage`

Chaque classe contient :

* attributs
* méthodes CRUD
* relations

---

## 📅 Planning sur 5 jours

### 🟩 Jour 1 – Architecture

* Structure MVC
* Singleton DB
* Tables SQL
* README + GitHub init

### 🟩 Jour 2 – Authentification

* Login + Register
* Gestion des rôles
* Protection des routes

### 🟩 Jour 3 – Classes & Travaux

* Crud Classes
* Crud Travaux
* Assignation

### 🟩 Jour 4 – Interactions étudiants

* Soumission travaux
* Correction travaux
* Présence
* Notes

### 🟩 Jour 5 – Chat + Stats + Finalisation

* Mise en place chat
* Statistiques
* Debug
* Présentation Canva

---

## 🧪 Modalités d’évaluation

* Démonstration en 5 minutes
* Explication du code
* Session Live Coding
* Qualité du modèle MVC
* Respect du pattern Singleton
* Fonctionnement du chat
* Organisation Git

---

## 📊 Livrables

* Code source complet
* Base de données (`minerva_db`)
* Diagrammes UML (PDF)
* README complet
* Planification Jira
* Présentation Canva

---

## ✔️ Critères de performance

* Auth sécurisée
* Gestion complète des classes
* Travaux + Assignations
* Soumissions + Notes
* Absences + Statistiques
* Chat fonctionnel
* Organisation Git modèle
* Architecture MVC propre

---

## 📜 Licence

Projet académique – libre pour usage éducatif.
