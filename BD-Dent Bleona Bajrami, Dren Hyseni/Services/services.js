const creative = document.querySelector('.creative');
const servicestxt = document.querySelector('.servicestxt');

const creative1 = document.querySelector('.creative1');
const servicestxt1 = document.querySelector('.servicestxt1');




const tl  = new TimelineMax();


tl.fromTo(creative,1.3, {x:"-30%",opacity:0}, {x:"0%",opacity:1, ease:Power2.easeInOut})
.fromTo(servicestxt, 1 ,{x:"+30%",opacity:0}, {x:"0%",opacity:1, ease:Power2.easeInOut},"-=1.2")
.fromTo(creative1,1.3, {x:"-30%",opacity:0}, {x:"0%",opacity:1, ease:Power2.easeInOut},"-=1.2")
.fromTo(servicestxt1, 1 ,{x:"+30%",opacity:0}, {x:"0%",opacity:1, ease:Power2.easeInOut},"-=1.2")


