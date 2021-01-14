//Fillimi i kodit per responsive Navigation
const navSlide =()=>{
    const burger=document.querySelector('.burger');
    const nav=document.querySelector('.nav-Links');
    const navLinks = document.querySelectorAll('.nav-Links li');

    burger.addEventListener('click',()=>{
        nav.classList.toggle('nav-active')

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