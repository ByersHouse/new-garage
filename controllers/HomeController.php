<?php
Class HomeController extends Controller {


    function __construct()
    {
        $this->model = new Pages();
    }

    public function Index() {

     $page = $this->model->getPage('index');

    Page::render('index', ['page' =>  $page]);
}


}