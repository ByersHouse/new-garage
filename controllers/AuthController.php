<?php


class AuthController extends Controller {
  
    
    public function __construct() {
        
        @$this->request = Storage::get('post');
        $this->user = new Users();
       
       
        
    }
    
    public function Enter(){

     $pass = password_hash('12345', PASSWORD_BCRYPT);
     echo  '<br>' . $pass . '<br>';
    $this->user->Enter('admin', '12345');

    }

    
    public function actionLogout() {
        
        session_destroy();
        $this->goURI();
    }
        
       
    
      
    
    
    
}
