$('.list-culinary-card').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.list-museums-card').slick({
    infinite: true,
    speed: 600,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
      responsive: [
          {
              breakpoint: 480,
              settings: {
                  arrows: false,
                  dots: true,
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
          }
      ]
  });

  $('.list-souvenir-card').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.wrap-nav-transportation .nav-tabs li').on('click', function(){
    $('.wrap-nav-transportation .nav-tabs li').removeClass('active');
    $(this).addClass('active');
  });
