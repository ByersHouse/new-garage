<center>
<form id="loginform"  action="login"  method="POST">
    
    <p>
        <input type="text" name="username"  placeholder="Login">
    </p>
  
    <p>
        <input type="password" name="password"  placeholder="Password">
    </p>
    
    <button type="submit" name="do_login">Enter</button>
</form>
<?php if(!empty($this->message)) echo $this->message;?> 
</center>


<script>

$(document).ready(function(){

    $("#loginform").validate({

       rules:{

            username:{
                required: true,
                minlength: 2,
                maxlength: 16,
            },

            password:{
                required: true,
                minlength: 2,
                maxlength: 16,
            },
           
       },

       messages:{
           
     
            username:{
                required: "This field is required",
                minlength: "Login shold be al least 2 symbols",
                maxlength: "Max count of symbols - 16",
            },

            password:{
                required: "This field is required",
                minlength: "Password shold be al least 2 symbols",
                maxlength: "Max count of symbols - 16",
            },
            
       }

    });

});

</script>
