<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/slick.css') }}">
    <title>Litsey</title>
</head>
<body>

<!-- animation start -->

	<div class="animation" id="loading">
		<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
	</div>

<!-- animation end -->

<!-- header start -->

<header>
  <div class="header">
    <section class="container">
      <div class="header__list">
        <div>
          <ul class="header__menu">
            <li><a href="{{ asset('/articles') }}" class="header__menu__link">Yangiliklar</a></li>
            <li><a href="{{ asset('/varticles') }}" class="header__menu__link">E’lonlar</a></li>
            <li><a href="https://www.gazeta.uz/oz/tag/diplomatiya%20universiteti/" class="header__menu__link">Maqolalar</a></li>
          </ul>
        </div>

        <div class="header__list__item">
          <div>
            <ul class="header__language">
              <li><a class="header__language__link" href="#!">UZ <span><i class="fas fa-angle-down"></i></span></a>
                <ul class="header__language__none">
                  <li><a class="header__language__link" href="#!">RU</a></li>
                  <li><a class="header__language__link" href="#!">EN</a></li>
                </ul>
              </li>
            </ul>
          </div>
          
          <div class="header__form">
              <form action="{{ route('search') }}" method="GET">
                 @csrf
                <input type="text" class="header__form__input" placeholder="Text" name="phrase">
                <button class="header__form__button"><i class="fas fa-search"></i></button>
              </form>
              <button class="header__button__false"><i class="fas fa-times"></i></button>
          </div>

          <div class="header__form__true">
            <button class="header__button__true"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="header__cart">
    <section class="container">
      <div class="header__cart__list">
        <div class="header__cart__img">
          <a href="{{ asset('/') }}">
            <img src="{{ asset('/assets/foto/logo.svg') }}" alt="logo">
          </a>
        </div>

        <div>
          <h2 class="header__cart__title__h2">Jahon iqtisodiyoti va diplomatiya universiteti akademik litseyi</h2>
          <ul class="header__cart__menu">
            <li><a href="{{ asset('/') }}" class="header__cart__menu__link">Bosh sahifa </a></li>
            <li><a href="{{ asset('/administration') }}" class="header__cart__menu__link">Ma’muriyat</a></li>
            <li><a href="{{ asset('/chairs') }}" class="header__cart__menu__link">Kafedralar</a></li>
            <li><a href="{{ asset('/chairs/2') }}" class="header__cart__menu__link">O’quvchilarga</a></li>
            <li><a href="{{ asset('/to_entrants') }}" class="header__cart__menu__link">Abiturientlarga</a></li>
            <li><a href="https://home.moodie.ai/" class="header__cart__menu__link">Moodie</a></li>
            <li><a href="{{ asset('/contact') }}" class="header__cart__menu__link">Bog’lanish</a></li>
          </ul>
        </div>

        <div class="header__burger">
          <div class="header__burger__start burger__start"><i class="fas fa-bars"></i></div>
          <div class="header__burger__start burger__end"><i class="fas fa-times"></i></div>
        </div>
      </div>
    </section>
  </div>
</header>

<!-- header end --> 

@yield('content')

<!-- footer start -->

<footer>
	<div class="footer">
		<section class="container">
			<div class="footer__list">

				 <div class="footer__cart">
					<div class="footer__logo">
						<a href="{{ asset('/') }}">
							<img src="{{ asset('/assets/foto/logo_footer.svg') }}" alt="logo">
						</a>
					</div>

					<div>
						<h4 class="footer__title__h4">Manzil: <span>Toshkent sh. Shayxontohur tum. Zulfiyaxonim k. 242-uy</span></h4>

						<a href="tel:71 244-84-19" class="footer__link__tel">Telefon: 71 244-84-19</a>

						<ul class="footer__net">
							<li><a href="https://Instagram.com/NuroniyUz" class="footer__net__link"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://m.facebook.com/Diplomatiya_litseyi" class="footer__net__link"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://t.me/Diplomatiya_litseyi" class="footer__net__link"><i class="fab fa-telegram-plane"></i></a></li>
						</ul>
					</div>
				 </div>

				 <div class="footer__item">
					<ul class="footer__item__menu">
						<li><a class="footer__link__menu" href="{{ asset('/') }}">Bosh sahifa</a></li>
						<li><a class="footer__link__menu" href="{{ asset('/administration') }}">Ma’muriyat</a></li>
						<li><a class="footer__link__menu" href="{{ asset('/chairs') }}">Kafedralar</a></li>
						<li><a class="footer__link__menu" href="{{ asset('/chairs/2') }}">O’quvchilarga</a></li>
					</ul>

					<ul class="footer__item__menu">
						<li><a class="footer__link__menu" href="{{ asset('/to_entrants') }}">Abiturientlarga</a></li>
						<li><a class="footer__link__menu" href="https://home.moodie.ai/">Moodie</a></li>
						<li><a class="footer__link__menu" href="{{ asset('/contact') }}">Bog’lanish</a></li>
					</ul>

					<ul class="footer__item__menu">
						<li><a class="footer__link__menu" href="{{ asset('/articles') }}">Yangiliklar</a></li>
						<li><a class="footer__link__menu" href="{{ asset('/varticles') }}">E’lonlar</a></li>
						<li><a class="footer__link__menu" href="https://www.gazeta.uz/oz/tag/diplomatiya%20universiteti/">Maqolalar</a></li>
					</ul>
				 </div>
				 
			</div>
		</section>

		<div class="footer__bottom">
			<section class="container">
				<div class="footer__bottom__list">
					<a class="footer__bottom__link" href="#!">«Jahon iqtisodiyoti va diplomatiyz universiteti akademik litseyi» Все права защищены</a>
					<a class="footer__bottom__link" href="https://sos.uz/">© Copyright 2021 - Web developed by SOS Group</a>
				</div>
			</section>
		</div>
	</div>
</footer>


<!-- footer end -->

	<!-- slaeder end -->
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  <script src="{{ asset('/assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('/assets/js/slick.min.js') }}"></script>
  <script src="{{ asset('/assets/js/index.js') }}"></script>
  <script src="{{ asset('/assets/js/fancyapps.js') }}"></script>
	<script src="{{ asset('/assets/js/animation.js') }}"></script>
</body>
</html>