<?php
class CartController extends Controller {

    function __construct()
    {
        $this-> model= new Cart();
    }

    public function ViewCart(){

    $result = $this->model->formCart();
    if($result){
        Page::render('cart', ['html' => $result]);
        return;
    }
    Page::render('empty');
    }
}