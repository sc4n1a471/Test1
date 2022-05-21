<?php

include_once 'DatabaseController.php';
include_once '../model/Advertisement.php';

class AdvertisementController {
    private DatabaseController $db;

    public function __construct() {
        $this->db = new DatabaseController();
    }

    public function getAds() {
        $ads = [];
        $data = $this->db->getAllData("advertisements");

        foreach ($data as $individualData) {
            $ad = new Advertisement(
                $individualData["id"],
                $individualData["userid"],
                $individualData["title"],
                $individualData["name"]
            );
            $ads[] = $ad;
        }
//        console_log($ads[0]->getTitle());
        return $ads;
    }
}
