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


}