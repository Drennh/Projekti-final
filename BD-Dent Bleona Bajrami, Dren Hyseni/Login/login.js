const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
const pwRegex = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;


const email = document.querySelector('#email');
const pass = document.querySelector('#password');
const buttoni = document.querySelector('#buttoni');
const email_error = document.querySelector('#email_error');
const pass_error = document.querySelector('#pass_error');
const a = document.querySelector('#a');

buttoni.addEventListener('click',validimi);
email.addEventListener('input',email_Verify);
pass.addEventListener('input',password_Verify);

function validimi(){
    if(email.value==''||!emailRegex.test(email.value)){
        email.style.borderBottomColor = "red";
        email_error.style.opacity="1";
    }
    if(pass.value==''||!pwRegex.test(pass.value)){
        pass.style.borderBottomColor = "red";
        pass_error.style.opacity="1";
    } 
    
    if(email_Verify() && password_Verify()) {
        window.location.href = "http://localhost/projekti-final-Database/BD-Dent%20Bleona%20Bajrami,%20Dren%20Hyseni/Login/loginverify.php";
    } 
}
function email_Verify(){
    if(emailRegex.test(email.value)){
        email.style.borderBottomColor = "#56768a";
        email_error.style.opacity="0";
        return true;
    }
    return false;
}
function password_Verify(){
    if(pwRegex.test(pass.value)){
        pass.style.borderBottomColor = "#56768a"    ;
        pass_error.style.opacity="0";
        return true;
    }
    return false;
}

//Fillimi i kodit per responsive Navigation
const navSlide =()=>{
    const burger=document.querySelector('.burger');
    const nav=document.querySelector('.nav-Links');
    const navLinks = document.querySelectorAll('.nav-Links li');

    burger.addEventListener('click',()=>{
        nav.classList.toggle('nav-active');

        //Linqet e animuara
        navLinks.forEach((link,index)=>{
            if(link.style.animation){
                link.style.animation='';

            }
            else{
                link.style.animation= `navLinksFade 0.3s ease forwards ${index/10}s`;
            }
        });
    }); 
}
navSlide();



//Mbarimi i kodit per responsive Navigation
