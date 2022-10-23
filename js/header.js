//skrypt sticky nav
window.addEventListener("scroll",function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky",window.scrollY > 0);
    var logo = document.getElementsById("logo");
    logo.classList.toggle("sticky",window.scrollY > 0); 
})

    
    
    
    
