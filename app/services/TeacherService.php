<?php

class TeacherService {

    public function registerTeacher(string $fullname, string $email, string $password)
    {
        $db = Database::getInstance()->getConnection();

        // Validation de Email et mot de passe
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['success' => false, 'message' => 'Email invalide'];
        }

        if (strlen($password) < 8) {
            return ['success' => false, 'message' => 'Mot de passe trop court'];
        }

        // Verification si email existe
        $check = $db->prepare("SELECT id FROM users WHERE email = ?");
        $check->execute([$email]);

        if ($check->fetch()) {
            return ['success' => false, 'message' => 'Email déjà utilisé'];
        }

        try {
            $hashed = password_hash($password, PASSWORD_BCRYPT);

            $stmt = $db->prepare("
                INSERT INTO users (fullname, email, password, role)
                VALUES (?, ?, ?, 'teacher')
            ");

            $stmt->execute([$fullname, $email, $hashed]);

            return ['success' => true];

        } catch (PDOException $e) {
            return ['success' => false, 'message' => 'Erreur serveur'];
        }
    }
}
