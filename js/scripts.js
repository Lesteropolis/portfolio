$(function(){

 // var scroll_start = 0;
 // var startchange = $('#about');
 // var offset = startchange.offset();
 // $(document).scroll(function() { 
 //    scroll_start = $(this).scrollTop();
 //    console.log(offset.top);
 //    console.log(scroll_start);
 //    if(scroll_start > 50 && !$('#navbar').hasClass('navChange')) {
 //        $('#navbar').addClass('navChange').removeClass('navDefault');
 //        $('div.navAdd').addClass('hidden');
        
 //     } else { 
 //        $('#navbar').addClass('navDefault').removeClass('navChange')
 //        $('div.navAdd').removeClass('hidden');
      
 //     }
 // });

 //Typed JS
  $(".element").typed({
    strings: ["Hi, I'm Lester","This is my site", "Hi, I'm Lester"],
    typeSpeed: 0
  });

  //HAMBURGER
  $('.fa-bars').on('click', function(){
    $('#nav').addClass('flexplicit');
  });

  $("#nav a").click(function () {
      $("#nav").removeClass('flexplicit');
  });

  //SMOOTH SCROLL
  $("#aboutClick").click(function(event) {
    event.preventDefault();
      $.smoothScroll({
        scrollTarget: '#about'
      });
  });

  $("#arrows").click(function(event) {
    event.preventDefault();
      $.smoothScroll({
        scrollTarget: '#about'
      });
  });

  $("#portfolioClick").click(function(event) {
    event.preventDefault();
      $.smoothScroll({
        scrollTarget: '#portfolio'
      });
  });

  $("#homeClick").click(function(event) {
    event.preventDefault();
      $.smoothScroll({
        scrollTarget: '#home'
      });
  });

  $("#backTop").click(function(event) {
    event.preventDefault();
      $.smoothScroll({
        scrollTarget: '#home'
      });
  });

  $("#skillsClick").click(function(event) {
    event.preventDefault();
      $.smoothScroll({
        scrollTarget: '#skills'
      });
  });

  $("#contactClick").click(function(event) {
    event.preventDefault();
      $.smoothScroll({
        scrollTarget: '#contact'
      });
  });



});