$(function(){

	 // $(window).scroll(function () {
  //     if ($(this).scrollTop() > $('#about')) {
  //        $('nav').addClass('changeColor')
  //     }
  //     if ($(this).scrollTop() < 50) {
  //        $('nav').removeClass('changeColor')
  //     }
  //  });

 var scroll_start = 0;
 var startchange = $('#about');
 var offset = startchange.offset();
 $(document).scroll(function() { 
    scroll_start = $(this).scrollTop();
    console.log(offset.top);
    console.log(scroll_start);
    if(scroll_start > 50) {
        $('#navbar').addClass('navChange').removeClass('navDefault');
        $('div.navAdd').addClass('hidden');
        
     } else {
        $('#navbar').addClass('navDefault').removeClass('navChange')
        $('div.navAdd').removeClass('hidden');
      
     }
 });

 //Typed JS
  $(".element").typed({
    strings: ["Hi, I'm Lester","This is my site", "Hi, I'm Lester"],
    typeSpeed: 0
  });
 

});