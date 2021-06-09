

  $(document).ready(function(){
    $('.slider').bxSlider({
      auto: true,
      
      /* autoControls: true,
      stopAutoOnClick: true,
      pager: true,*/ 
      
    });

    $('.multiple-items').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 3
    });
  });
