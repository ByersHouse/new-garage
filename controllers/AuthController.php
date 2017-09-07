<?php


class AuthController extends SiteController{
  
    
    public function __construct() {
        
        $this->request = $_REQUEST;
        $this->view = new View();
        $this->model = new Users();
       
       
        
    }
    

    public function actionSignup() {
 
        if(isset($this->request ['do_signup'])){
            
            
            if($_SESSION['rand_code'] == $this->request['kaptcha']){
               
                $this->model->newUser($this->request);
                $this->view->message = "You registred successfully please <a href=\"login\">Login</a>";    
            }
            else{
                 
                $this->view->message = 'Secret code wrong';
            }
           
        } 
         $this->view->render('signup');
    }
    
 
    
    
    public function actionLogin() {
     
       
        if (
            isset($this->request['do_login']) &&
            isset($this->request['username']) && 
            isset($this->request['password'])
            ){
         
                $user = $this->model->userExist($this->request['username'],2);

                if($user['password'] == base64_encode($this->request['password'])){

                    $_SESSION['logged_user'] = $user;
                    $this->goURI();

                }else{

                   $this->view->message = "Incorrect login or password";
                   
                }
        }
        $this->view ->render('login');
         echo $wow;
    }
    
    public function actionLogout() {
        
        session_destroy();
        $this->goURI();
    }
        
       
    
      
    
    
    
}
