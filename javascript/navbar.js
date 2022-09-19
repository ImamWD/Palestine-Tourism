
//_________________drop Pages list at Nav____________
let Pages = document.querySelector('.Pages');
let menu = document.querySelector('.menu');

Pages.addEventListener('mouseenter',function(){
    $(".menu").slideDown(300);
})
Pages.addEventListener('mouseleave',function(){
    $(".menu").slideUp(300);
})


