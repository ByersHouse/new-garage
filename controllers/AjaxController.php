<?php


Class AjaxController extends Controller {

    function postData()
    {
     $this->model = new Ajax();

     $this->model->Ajax();
     return;

    }


}