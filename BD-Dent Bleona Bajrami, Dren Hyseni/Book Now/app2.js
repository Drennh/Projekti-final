const help = document.querySelector('.help');
const div1 = document.querySelector('#div1');
const div2 = document.querySelector('#div2');
const div3 = document.querySelector('#div3');
const div4 = document.querySelector('#div4');



const tl  = new TimelineMax();


tl.fromTo(help,1, {x:"+20%",opacity:0}, {x:"0%",opacity:1, ease:Power2.easeInOut})
.fromTo(div1,1.3, {x:"+20%",opacity:0}, {x:"0%",opacity:1, ease:Power2.easeInOut},"-=0.8")
.fromTo(div2,1.3, {x:"+20%",opacity:0}, {x:"0%",opacity:1, ease:Power2.easeInOut},"-=1.2")
.fromTo(div3,1.3, {x:"+20%",opacity:0}, {x:"0%",opacity:1, ease:Power2.easeInOut},"-=1.2")
.fromTo(div4,1.3, {x:"+20%",opacity:0}, {x:"0%",opacity:1, ease:Power2.easeInOut},"-=1.2")
