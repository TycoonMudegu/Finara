<?php
require_once '../app/models/UserModel.php';

class UserController {
    public function getUsers() {
        $userModel = new User();
        return $userModel->fetchAllUsers();
    }

    // Other methods for creating, updating, deleting users...
}
