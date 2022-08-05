@extends('layouts.site')

@section('content')


<!-- Administration start -->

<div class="administration" style="background: url(/assets/foto/administration.png);">
	<section class="container">
		<div class="administration__cart">
			<h2 class="administration__title__h2">Abiturientlarga</h2>
			<ul class="administration__menu">
				<li><a href="{{ asset('/') }}" class="administration__main__link">Bosh sahifa</a></li>
				<li><span></span></li>
				<li><a href="#!" class="administration__main__link">Abiturientlarga</a></li>
			</ul>
		</div>
	</section>
</div>

<!-- Administration end -->


<!-- to_entrants start -->

<div class="to_entrants">
	<section class="container">
		<div class="to_entrants__cart">
			<h2 class="about__title__h2">Abiturientlarga</h2>

    <ul class="to_entrants__list">
			<li>
				<a href="{{ asset('/assets/foto/brand_1.png') }}" download class="to_entrants__list__link">
					<span><i class="fas fa-file-alt"></i></span>
					YO‘NALISHLAR / НАПРАВЛЕНИЯ
				</a>
			</li>

			<li>
				<a href="{{ asset('/assets/foto/brand_1.png') }}" download class="to_entrants__list__link">
					<span><i class="fas fa-file-alt"></i></span>
					SARALASH IMTIHONLARI TARTIBI / ПОРЯДОК ОТБОРОЧНЫХ ЭКЗАМЕНОВ
				</a>
			</li>

			<li>
				<a href="{{ asset('/assets/foto/brand_1.png') }}" download class="to_entrants__list__link">
					<span><i class="fas fa-file-alt"></i></span>
					NA'MUNAVIY TEST TOPSHIRIQLARI / ПРИМЕРЫ ТЕСТОВЫХ ЗАДАНИЙ 
				</a>
			</li>

			<li>
				<a href="{{ asset('/assets/foto/brand_1.png') }}" download class="to_entrants__list__link">
					<span><i class="fas fa-file-alt"></i></span>
					DIQQAT! E’LON! / ВНИМАНИЕ! ОБЪЯВЛЕНИЕ!
				</a>
			</li>

			<li>
				<a href="{{ asset('/assets/foto/brand_1.png') }}" download class="to_entrants__list__link">
					<span><i class="fas fa-file-alt"></i></span>
					KERAKLI HUJJATLAR / НЕОБХОДИМЫЕ ДОКУМЕНТЫ
				</a>
			</li>

			<li>
				<a href="{{ asset('/assets/foto/brand_1.png') }}" download class="to_entrants__list__link">
					<span><i class="fas fa-file-alt"></i></span>
					KO‘P BERILADIGAN SAVOLLAR / ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ
				</a>
			</li>

			<li>
				<a href="{{ asset('/assets/foto/brand_1.png') }}" download class="to_entrants__list__link">
					<span><i class="fas fa-file-alt"></i></span>
					Eslatma / ПРИМЕЧАНИЕ
				</a>
			</li>

			<li>
				<a href="{{ asset('/assets/foto/brand_1.png') }}" download class="to_entrants__list__link">
					<span><i class="fas fa-file-alt"></i></span>
					MANDAT / МАНДАТ
				</a>
			</li>
		</ul>
		</div>
	</section>
</div>

<!-- to_entrants end -->

@endsection