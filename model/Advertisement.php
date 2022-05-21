<?php

class Advertisement {
    private $id;
    private $userid;
    private $title;
    private $username;

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
