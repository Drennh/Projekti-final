//Validation code for inputs

var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

email.addEventListener('textInput',email_Verify);
password.addEventListener('textInput',pass_Verify);

function validated(){
    if(email.value.length<9){
        email.style.borderBottomColor = "red";
        email_error.style.opacity="1";
        email.focus();
        return false;
    }
    if(password.value.length<6){
        password.style.borderBottomColor = "red";
        pass_error.style.opacity="1";
        password.focus();
        return false;
    }
}
function email_Verify(){
    if(email.value.length>=8){
        email.style.borderBottomColor = "#56768a";
        email_error.style.display="none";
        return true;
    }
}

function pass_Verify(){
    if(password.value.length>=6){
        password.style.borderBottomColor = "#56768a";
        pass_error.style.display="none";
        return true;
    }
}