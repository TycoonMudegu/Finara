<?php
class User {
    public function fetchAllUsers() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Other methods for interacting with user data...
}
