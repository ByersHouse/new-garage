<?php

class Pages extends Model {
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'pages';
    }


    public function getPage($alias){


        $db = $this->db;
        $page = $db->prepare('SELECT code FROM '.$this->table . ' WHERE alias = ?');
        $page->execute([$alias]);

        $page = $page->fetch();
        return $page;

    }

    public function getMap(){

        $map = "<script src='/template/js/gmap.js' ></script> 
                <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDjbsUuGG3Z5_bnQ1k6XAFlbrfE-rqFQjQ&callback=initMap&language=ru' async defer></script>";
        return $map;
    }


}