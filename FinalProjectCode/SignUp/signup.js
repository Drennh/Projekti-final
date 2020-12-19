//Validation code for inputs

var name1 = document.forms['form']['name1'];
var email = document.forms['form']['email'];
var phone = document.forms['form']['phone'];
var password = document.forms['form']['password'];

var fullname_error = document.getElementById('fullname_error');
var email_error = document.getElementById('email_error');
var phone_error = document.getElementById('phone_error');
var pass_error = document.getElementById('pass_error');
 

name1.addEventListener('textInput',name_Verify);
email.addEventListener('textInput',email_Verify);
phone.addEventListener('textInput',phone_Verify);
password.addEventListener('textInput',pass_Verify);

function validated(){
    if(name1.value.length<9){
        name1.style.borderBottomColor = "red";
        fullname_error.style.opacity="1";
        name1.focus();
        return false;
    }
    if(email.value.length<6){
        email.style.borderBottomColor = "red";
        email_error.style.opacity="1";
        email.focus();
        return false;
    }
    
    if(phone.value === ''){
        phone.style.borderBottomColor = "red";
        phone_error.style.opacity="1";
        phone.focus();
        return false;
    }
    if(password.value.length<8){
        password.style.borderBottomColor = "red";
        pass_error.style.opacity="1";
        password.focus();
        return false;
    }
}
function name_Verify(){
    if(name1.value.length>=8){
        name1.style.borderBottomColor = "#56768a";
        fullname_error.style.display="none";
        return true;
    }
}

function email_Verify(){
    if(email.value.length>=6){
        email.style.borderBottomColor = "#56768a";
        email_error.style.display="none";
        return true;
    }
    
}
function phone_Verify(){
    if(phone.value.length>=6){
       phone.style.borderBottomColor = "#56768a";
        phone_error.style.display="none";
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

