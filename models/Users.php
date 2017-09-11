<?php



class Users extends Model
{
   public function checkAuth(){

       return false;
   }


   public function Enter($login, $password)
   {
       $db = $this->db;
       $query = $db->prepare('SELECT password FROM users WHERE login = ?');

       $query->execute([$login]);
       $query->setFetchMode(PDO::FETCH_ASSOC);
       $query = $query->fetch();
       echo $query['password'] . '<br>';
       var_dump(password_verify('12345', trim($query['password'])));
   }

}