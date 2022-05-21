<?php
include_once 'DatabaseController.php';
include_once '../model/User.php';

class UserController {
    private DatabaseController $db;

    public function __construct() {
        $this->db = new DatabaseController();
    }

    public function getUsers() {
        $users = [];
        $data = $this->db->getAllData("users");

        // Iterates through array containing users, creates User objects and adds them to an array
        foreach ($data as $individualData) {
            $user = new User($individualData["id"], $individualData["name"]);
            $users[] = $user;
        }
        return $users;
    }
}