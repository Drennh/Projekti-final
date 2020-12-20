const creative = document.querySelector('.creative');
const servicestxt = document.querySelector('.servicestxt');




const tl  = new TimelineMax();


tl.fromTo(creative,1.3, {x:"-30%",opacity:0}, {x:"0%",opacity:1, ease:Power2.easeInOut})
.fromTo(servicestxt, 1 ,{x:"+30%",opacity:0}, {x:"0%",opacity:1, ease:Power2.easeInOut},"-=1.2")


