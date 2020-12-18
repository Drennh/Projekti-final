const email = document.querySelector('#email');
const password = document.querySelector('#password');
const LogIn = document.querySelector('.LogIn');
const loginbutton = document.querySelector('.loginbutton');
const signup = document.querySelector('.signup');
const passwordforgotten = document.querySelector('.passwordforgotten');



const tl  = new TimelineMax();


tl.fromTo(email,1, {y:"+15%",opacity:0}, {y:"0%",opacity:1, ease:Power2.easeInOut})
.fromTo(password, 1 ,{y:"-15%",opacity:0}, {y:"0%",opacity:1, ease:Power2.easeInOut},"-=1")
.fromTo(LogIn, 0.7 ,{y:"-10%",opacity:0}, {y:"0%",opacity:1, ease:Power2.easeInOut},"-=0.7")
.fromTo(loginbutton, 1 ,{opacity:0.7}, {opacity:1, ease:Power2.easeInOut},"-=1.5")
.fromTo(signup, 1 ,{opacity:0.5}, {opacity:1, ease:Power2.easeInOut},"-=1.2")
.fromTo(passwordforgotten, 1 ,{opacity:0.5}, {opacity:1, ease:Power2.easeInOut},"-=1.2")

