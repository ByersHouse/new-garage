<?php
class Cart extends Model{

 function formCart(){

     if(!(isset($_SESSION['cart']))){
         return false;
     }

     if($_SESSION['cart'][0]['total'] > 0) {


         $order_id = substr(sha1(md5(microtime().'valera'.rand(1,56))),-12);

         $_SESSION['order_id'] = $order_id;


         $package = $_SESSION['cart'][0]['item'];
         if($package == 'econom'){ $p = 'ЭКОНОМ'; } else { $p = strtoupper($_SESSION['cart'][0]['item']); }


         $liqpay = new LiqPay('i73597616648', 'xMjw3rMuzZlRpUm6w28sQWjOQzj43AsijGxcb5DI');
         $html = $liqpay->cnb_form([
             'action'         => 'pay',
             'amount'         =>  $_SESSION['cart'][0]['total'],
             'currency'       => 'UAH',
             'description'    => 'Оплата годового пакета '.$p,
             'order_id'       =>  $order_id,
             'version'        => '3',
             'language'      => 'ru',
             'result_url'    => 'http://'
         ]);

         return $html;

     }

     else
     {

        return false;
     }



 }
}