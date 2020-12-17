const creative = document.querySelector('.creative');
const servicestxt = document.querySelector('.servicestxt');
const whileyouhave = document.querySelector('.whileyouhave');
const butoni1 = document.querySelector('.butoni1');
const section = document.querySelector('section');



const tl  = new TimelineMax();


tl.fromTo(creative,1.3, {x:"+30%"}, {x:"0%", ease:Power2.easeInOut})
.fromTo(servicestxt, 1 ,{x:"+30%"}, {x:"0%", ease:Power2.easeInOut},"-=1.2")
.fromTo(whileyouhave, 1 , {opacity : 0}, {opacity : 1})
.fromTo(butoni1, 1 , { y:"-30%",opacity : 0} , { y:"0%",opacity: 1})

