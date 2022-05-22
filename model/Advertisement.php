<?php

class Advertisement {
    private int $id;
    private int $userid;
    private string $title;
    private string $username;

    public function __construct($id, $userid, $title, $username) {
        $this->id = $id;
        $this->userid = $userid;
        $this->title = $title;
        $this->username = $username;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function getUsername() {
        return $this->username;
    }
}
