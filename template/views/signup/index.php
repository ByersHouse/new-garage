<style>
 
</style>    
<center>
<form id="signupform" action="signup" method="POST">
   
    <p>
        <input type="text" id="username" name="username" placeholder="Login" >
    </p>
    
 
    <p>
        <input type="password" id="password" name="password" placeholder="Password">
    </p>
    

    <p>
        <input type="password" id="password2" name="password2" placeholder="Retype password">
    </p>
    
    <b></b>
    <p>
        <input type="text" name="email" placeholder="Email" type="email">
    </p>
    <p><img src="captcha.php"></p>
    <p>
        <input type="text" name="kaptcha" placeholder="Secret code">
    </p>
    
    <button type="submit" name="do_signup">Send</button>
</form>
<?php if(!empty($this->message)) echo $this->message;?> 
</center>

<script>

$(document).ready(function(){

    $("#signupform").validate({

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
            password2:{
                required: true,
                minlength: 2,
                maxlength: 16,
                pas1_pas2:true
            },
            email:{
                required: true,
                email:true,
                minlength: 8,
             
            },
            kaptcha:{
                required: true,
                maxlength: 5,
             
            },
       },

       messages:{
           
           email:{
                required: "This field is required",
                minlength: "Email shold be al least 8 symbols",
                email:"This field should be valid email",
            },
           
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
            kaptcha:{
                required: "This field is required",
                maxlength: "Max count of symbols - 5",
             
            },
            
       }

    });



    $.validator.addMethod('pas1_pas2',
        function(){
            if($.trim($("#password").val())!=$("#password2").val()) {
                
                return false;
            }else{
                return true;
            }
                
        }
        ,"Passwords does not matches!"
    );

});

</script>
