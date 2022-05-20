<?php

class Advertisement {
    private $id;
    private $userid;
    private $name;

    public function __construct($id, $userid, $name) {
        $this->id = $id;
        $this->userid = $userid;
        $this->name = $name;
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
    public function getName() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getUserid() {
        return $this->userid;
    }
}
