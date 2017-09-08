<?php
class LoginController extends Controller{


    function __construct()
    {
        $this->model = new Users();

    }

    public function Auth(){
        $check =$this->model->checkAuth();
        if(!$check){
            Page::render('/login/index');
        }
    }
}