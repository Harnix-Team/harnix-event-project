 // -----------menu click js----------
 
      $(document).ready(function(){
        $('.menu-toggle').click(function(){
          $('.menu-burger').toggleClass('active')
          $('.menu').toggleClass('active')
        });
      });

// ****header scroll function****

      $( () => {
    
        //On Scroll Functionality
        $(window).scroll( () => {
          var windowTop = $(window).scrollTop();
          windowTop > 50 ? $('header').addClass('og-hf') : $('header').removeClass('og-hf');
        });
      });