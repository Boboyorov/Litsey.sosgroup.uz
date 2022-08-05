$(document).ready(function(){
(function($){
  $('.number').each(function(){
      $(this).prop('Counter',0).animate({
          Counter:$(this).text()
      },
      {
          duration:9000,
          easing:"swing",
          step:function(now){
              $(this).text(Math.ceil(now));
          }  
     });
  })
})(jQuery);
});

  $(document).ready(function(){
    $('.slaeder__top__slik').slick({
        dots: true,
        arrows:true,
        autoplaySpeed:3000,
        infinite: true,
        speed: 1500,
        autoplay:true,
        fade: true,
    });
  }); 
  
  $(document).ready(function(){
    $('.header__form__true').click(function(){
      $('.header__form').fadeTo(500, 1)
      $('.header__form').css('z-index','555').css('opacity','1').css('margin','0')
    })
  });
  
  $(document).ready(function(){
    $('.header__button__false').click(function(){
        $('.header__form').fadeTo(500, 1)
        $('.header__form').css('z-index','0').css('opacity','0').css('margin','-100%')
    })
  });


  $(document).ready(function(){
    $('.burger__start').click(function(){
      $('.header__cart__menu').fadeTo(500, 1)
      $('.header__cart__menu').css('display','flex')
      $('.burger__end').css('display','block')
      $('.burger__start').css('display','none')
    })
  });
  
  $(document).ready(function(){
    $('.burger__end').click(function(){
      $('.header__cart__menu').fadeTo(500, 1)
      $('.header__cart__menu').css('display','none')
      $('.burger__end').css('display','none')
      $('.burger__start').css('display','block')
    })
  });




// --------------------------------

$(function(){
  let Catalog_max__pro__link = document.querySelectorAll('.news_xb__page__link');

  for(let i = 0; i<Catalog_max__pro__link.length; i++){
      Catalog_max__pro__link[i].addEventListener('click',function(){
          for(let j = 0; j<Catalog_max__pro__link.length;j++){
              Catalog_max__pro__link[j].classList.remove('news_xb__page__link__active');
          }
          this.classList.add('news_xb__page__link__active');

      })
  }
});

// -------------------------------------



$(document).ready(function(){
  $('.academic__item').click(function(){
     var selector = '.academic__item';
        $(selector).on('click', function(){
      $(selector).removeClass('active');
    this.selector='academic__active'; 
  $(this).addClass('academic__active');

    $('.academic__button__active').click(function(){
       $(selector).on('click', function(){
         $(selector).removeClass('academic__active');
       this.selector=this.selector;
    $(this).addClass('academic__active__mrx');
});
});
});
});
});