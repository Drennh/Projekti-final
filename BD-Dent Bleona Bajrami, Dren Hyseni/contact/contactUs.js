const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;

const name = document.querySelector('#Name');
const email = document.querySelector('#Email');
const message = document.querySelector('#message');
const button = document.querySelector('.contactusbutton');

button.addEventListener('click',validated);

name.addEventListener('input',name_Verify);
email.addEventListener('input',email_Verify);
message.addEventListener('input',message_Verify);

function validated(){
  if(name.value.length==''||name.value.length<8){
    name.style.borderBottomColor = "red";
    fullname_error.style.opacity="1";
  }
  else if(email.value.length==''||!emailRegex.test(email.value)){
    email.style.borderBottomColor = "red";
    email_error.style.opacity="1";
  }
  else if(message.value.length==''||message.value.length<10){
    message.style.borderBottomColor = "red";
    message_error.style.opacity="1";
  }
  
  else {
    alert('Email sent. Thank you for your feedback');
} 
}

function name_Verify(){
  if(name.value.length>=9){
    name.style.borderBottomColor = "#56768a";
    fullname_error.style.opacity="0";
  }
}

function email_Verify(){
  if(emailRegex.test(email.value)){
    email.style.borderBottomColor = "#56768a";
    email_error.style.opacity="0";
  }
}


function message_Verify(){
  if(message.value.length>=10){
    message.style.borderBottomColor = "#56768a";
    message_error.style.opacity="0";
  }
}