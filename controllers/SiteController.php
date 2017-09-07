<?php



class SiteController{
       
     public function __construct() {
        
        $this->base = Dbo::getInstance();

  
    }
    
    public function actionIndex() {
        
       // $this->view->is_auth = $this->isAuth();
        //$this->model = new Users();
        //$users = $this->model->getUsers();
        $db = $this->base->db;
        $page = $db->prepare('SELECT code FROM pages WHERE alias = ?');
        $page->execute(['index']);
        $page = $page->fetch();

        View::render('index', ['page' =>  $page]);

        
    }
    
    public function isAuth(){
        
        return (bool)@$_SESSION['logged_user'];
    }
    

    public function goURI($url='index'){
        
       
            echo '<script type="text/javascript">'; 
            echo 'window.location.href="'.$url.'";'; 
            echo '</script>'; 
    } 
}
