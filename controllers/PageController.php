<?php
class PageController extends Controller {

    function __construct()
    {
        $this->model = new Pages();
    }

    public function View($alias){

        $alias = $alias[0];

        $page = $this->model->getPage($alias);


        if ($page && $alias == 'contacts'){

            $map = $this->model->getMap();
            Storage::set('map', $map);

            Page::render('index', ['page' => $page]);
            return true;


        }
        if($page) {

            Page::render('index', ['page' => $page]);
            return true;
        }
        Page::get404();


    }

}