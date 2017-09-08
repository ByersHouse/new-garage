<?php
Class Page
{
    static function render($view = 'index', array $arguments = [])
    {
        $file = ROOT . '/template/views/' . $view . '.php';
        $exist = file_exists($file);
        if($exist) {

            foreach ($arguments as $key => $val) {
                $$key = $val;
            }

            include_once $file;
            return true;
        }
        self::get404();
        return false;

    }

    /**
     *
     */
    static function get404(){
        self::render('404');
        die;
    }

    static function redirect($page = '/'){
        header('Location: '. $page);
    }
}