
$('document').ready(function()
{ 
/* validation */
$("#userlogin-form").validate({
rules:
{
password: {
required: true,
},
user_email: {
required: true,
email: true
},
},
messages:
{
password:{
required: "please enter your password"
},
user_email: "please enter your Username",
},
submitHandler: submitForm	
});  
/* validation */

/* login submit */
function submitForm()
{		
var data = $("#userlogin-form").serialize();

$.ajax({
type : 'POST',
url  : 'user_loginprocess.php',
data : data,
beforeSend: 
function()
{	
$("#error").fadeOut();
$("#btn_login").html('<i class="fa fa-spinner fa-pulse fa-fw"></i>');
},
success :  function(response)
{						
        if(response=="ok"){

                $("#btn_login").html('<i class="fa fa-spinner fa-pulse fa-fw"></i> &nbsp; Processing..');
                setTimeout(' window.location.href = "index.php"; ',1000);
        }
        else{

                $("#error").fadeIn(1000, function(){						
$("#error").html('<div class="alert alert-danger"> &nbsp; '+response+' Wrong details</div>');
$("#btn_login").html('<i class="fa fa-sign-in"></i> &nbsp; Sign In');
                                        });
        }
}
});
return false;
}
/* login submit */
});