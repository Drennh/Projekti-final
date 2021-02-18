const name=document.querySelector('#Name');
const email=document.querySelector('#Email');
const phonenumber=document.querySelector('#phonenumber');
const password=document.querySelector('#Password');
const button=document.querySelector('.signupbutton');

const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
const pwRegex = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;


button.addEventListener('click',validimi);

name.addEventListener('input',name_Verify);
email.addEventListener('input',email_Verify);
phonenumber.addEventListener('input',phone_Verify);
password.addEventListener('input',password_Verify);


function validimi(){
    if(name.value.length==' '||name.value.length<8){
        name.style.borderBottomColor = "red";
        fullname_error.style.opacity="1";
    }
   if(email.value.length==' '||!emailRegex.test(email.value)){
        email.style.borderBottomColor = "red";
        email_error.style.opacity="1";
    }

     if(phonenumber.value.length==' '||phonenumber.value.length<8){
        phonenumber.style.borderBottomColor = "red";
        phone_error.style.opacity="1";
    }
    if(password.value.length==' '||!pwRegex.test(password.value)){
        password.style.borderBottomColor = "red";
        pass_error.style.opacity="1";
    }
    if(name_Verify()&&email_Verify()&&phone_Verify&&password_Verify()){
        window.location.href='http://localhost/Projekti-final/BD-Dent%20Bleona%20Bajrami,%20Dren%20Hyseni/Home/home.php';
    }
    
}

function name_Verify(){
    if(name.value.length>=8){
        name.style.borderBottomColor = "#56768a";
        fullname_error.style.opacity="0";
        return true;
    }
    return false;
}

function email_Verify(){
    if(emailRegex.test(email.value)){
        email.style.borderBottomColor = "#56768a";
        email_error.style.opacity="0";
        return true;
    }
    return false;
}
function phone_Verify(){
    if(phonenumber.value.length>=9){
        phonenumber.style.borderBottomColor = "#56768a";
        phone_error.style.opacity="0";
        return true;
    }
    return false;
}
function password_Verify(){
    if(pwRegex.test(password.value)){
        password.style.borderBottomColor = "#56768a";
        pass_error.style.opacity="0";
        return true;
    }
    return false;
}

