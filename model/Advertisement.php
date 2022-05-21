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

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getUserid() {
        return $this->userid;
    }

    /**
     * @return mixed
     */
    public function getUsername() {
        return $this->username;
    }
}
