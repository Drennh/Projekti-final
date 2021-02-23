const lifeisshort = document.querySelector('.lifeisshort');
const smile = document.querySelector('.smiletxt');
const whileyouhave = document.querySelector('.whileyouhave');
const butoni1 = document.querySelector('.butoni1');
const goto = document.querySelector('.goto');



const tl  = new TimelineMax();


tl.fromTo(lifeisshort,0.7, {x:"-20%"}, {x:"0%", ease:Power2.easeInOut})
.fromTo(smile, 0.5 , {opacity : 0}, {opacity : 1})
.fromTo(whileyouhave, 0.5 , {opacity : 0}, {opacity : 1})
.fromTo(butoni1, 0.7 , { y:"-20%",opacity : 0} , { y:"0%",opacity: 1})



//Slider
const sliderConent=document.querySelectorAll('.slider-content');

var index=0;
document.querySelector('.rightarrow').addEventListener('click',function(){
    sliderConent[index].classList.remove('active');
    sliderConent[index].classList.add('not-active');
    index++;
    if(index==sliderConent.length)index=0;
    
    sliderConent[index].classList.remove('not-active');
    sliderConent[index].classList.add('active');
});

document.querySelector('.leftarrow').addEventListener('click',function(){
    sliderConent[index].classList.remove('active');
    sliderConent[index].classList.add('not-active');
    index--;
    if(index<0) index=sliderConent.length-1;

    sliderConent[index].classList.remove('not-active');
    sliderConent[index].classList.add('active');
});