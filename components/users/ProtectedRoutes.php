<?php
class ProtectedRoutes {

    public function AdminRoutes(){


        Page::redirect('login');
        return true;
    }

    public function Users(){
        return true;
    }


}