<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-utf8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="../../libs/jquery/jquery.min.js"></script>
<script src="../../libs/jquery/jquery.validate.min.js"></script>

<style>
 .header{
    text-align: center;
    width:100%;        
    background-color: #DBDBDB;
    margin: 0px 0px 0px 0px;
    height:50px;
    
}  
.content{
    text-align: center;
    width:100%;        
    background-color: #FAFAFA;
    margin: 0px 0px 0px 0px;
    height:auto;
    
}    

 .userpanel{
    margin: 0px 0px 0px 0px;
    
}      

.error{
        
        color:red;
    } 
</style>
</head>
<body>
<center>
<div id="header" name="header" class="header">    
    <a href="index">MainPage</a>

    <?php if($this->is_auth): ?>
        <a href="logout" >Logout</a>
        <div id="userpanel" name="userpanel" class="userpanel">
            <?php echo 'Welcome ,<b>'.($_SESSION['logged_user']['username']).'</b>';?>
        </div>    

    <?php else: ?>
        <a href="login">Login</a>
        <a href="signup">SignUp</a>
    <?php endif;?>
</div>
<div id="content" name="content" class="content">
    <?php if($this->is_auth):?>
    <table>
        <?php
    
        
        foreach($content as $user){
        
            echo "<tr><td>".$user["username"]."</td></tr>";
        }
    ?>
     </table>      
              
              
           
    <?php else: ?>        
            PLEASE SIGNUP OR LOGIN TO SEE HIDDEN CONTENT
    <?php endif;?>
</div>
</center>

</body>
</html>