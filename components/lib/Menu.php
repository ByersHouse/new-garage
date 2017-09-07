<?php
Class Menu {
    static function menuRender(){

        $db = Dbo::getInstance()->db;

        $arr = $db->query("SELECT `menu-title`, alias as url FROM pages");

        $arr = $arr->fetchAll(PDO::FETCH_ASSOC);
        $menu = '';
        foreach ($arr as $val){
                   if ($val['url'] == 'index'){
                       $menu .= '<li><a href="/"> '. mb_strtolower($val['menu-title']) .'</a></li>';
                       continue;
                   }

                   $menu .= '<li><a href="/page/' . $val['url'] .'"> '. mb_strtolower($val['menu-title']) .'</a></li>';

        }
        return $menu;
    }


}