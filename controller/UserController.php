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

        foreach ($data as $individualData) {
            $user = new User($individualData["id"], $individualData["name"]);
            $users[] = $user;
        }
//        console_log($users[0]->getName());
        return $users;
    }
}