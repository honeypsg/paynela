(function ($) {
  $(document).on('click','.accordion-button',function(){
    $('.introducing__nelacare--intro--accordion--item').removeClass('active-parent');
    if(!$(this).hasClass('collapsed'))
    {
      $(this).parent().addClass('active-parent');
    }
    else
    {
      $(this).parent().removeClass('active-parent');
    }
  })

  $(document).ready(function() {
    let $slider = $(".hero__section--intro--title--slider--container");
    let slideHeight = $(".hero__section--intro--title--slider--container div").outerHeight();
    let totalSlides = $(".hero__section--intro--title--slider--container div").length;
    let currentIndex = 0;
    let videoE = document.getElementById("hero__section--video--id"); //$('#hero__section--video--id');
    let load = 0;
    let first=0;
    let second = third = 1;

    function slideUp() {
        currentIndex++;
        if (currentIndex >= totalSlides) {
            $slider.append($slider.html());
            totalSlides = $(".hero__section--intro--title--slider--container div").length
            // $slider.css("top", 0);
            // currentIndex = 1;
        }
    
        // if(load==0)
        //   {
        //     videoE.play();
        //     load=1;
        //     // sleep(2000);
        //   }
          
          $slider.animate({ top: -currentIndex * slideHeight }, 500);

    }

    // setInterval(slideUp, 10000);

    videoE.addEventListener("timeupdate", function() {
      if(first==0 && this.currentTime>=2.200000 && this.currentTime<=2.8)
      {
        slideUp();
        first=1;
        second=0;
        third=1;
        console.log(this.currentTime);
      }
      else if(second==0 && this.currentTime>=7.2 && this.currentTime<=7.8)
      {
        slideUp();
        first=1;
        second=1;
        third=0;
        console.log(this.currentTime);
      }
      else if(third==0 && this.currentTime>=12.0 && this.currentTime<12.86)
      {
        first=0;
        second=1;
        third=1;
        slideUp();
        console.log(this.currentTime);
      }
      }, false);
});

})(jQuery);


