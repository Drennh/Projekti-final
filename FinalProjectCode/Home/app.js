const lifeisshort = document.querySelector('.lifeisshort');
const smile = document.querySelector('.smile');
const whileyouhave = document.querySelector('.whileyouhave');
const butoni1 = document.querySelector('.butoni1');
const goto = document.querySelector('.goto');



const tl  = new TimelineMax();


tl.fromTo(lifeisshort,0.7, {x:"-20%"}, {x:"0%", ease:Power2.easeInOut})
.fromTo(smile, 0.5 , {opacity : 0}, {opacity : 1})
.fromTo(whileyouhave, 0.5 , {opacity : 0}, {opacity : 1})
.fromTo(butoni1, 0.7 , { y:"-20%",opacity : 0} , { y:"0%",opacity: 1})
