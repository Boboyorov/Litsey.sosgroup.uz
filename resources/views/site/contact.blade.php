@extends('layouts.site')

@section('content')


<!-- Administration start -->

<div class="administration" style="background: url(/assets/foto/administration.png);">
	<section class="container">
		<div class="administration__cart">
			<h2 class="administration__title__h2">Bog’lanish</h2>
			<ul class="administration__menu">
				<li><a href="{{ asset('/') }}" class="administration__main__link">Bosh sahifa</a></li>
				<li><span></span></li>
				<li><a href="{{ asset('/contact') }}" class="administration__main__link">Bog’lanish</a></li>
			</ul>
		</div>
	</section>
</div>

<!-- Administration end -->


<!-- Connect start -->

<div class="connect">
	<section class="container">

		@foreach ($callbacks as $callback)
				
		<div class="connect__cart">
			<h2 class="about__title__h2">Jahon iqtisodiyoti va diplomatiya universiteti akademik litseyi</h2>

			<ul class="connect__list">
				<li>
					<a href="#!" class="connect__list__link"><span>Manzil: </span>    {{   $callback->adress }}</a>
				</li>

				<li>
					<a href="#!" class="connect__list__link"><span>Mo'ljal: </span>    {{    $callback->moljal }}</a>
				</li>

				<li>
					<a href="#!" class="connect__list__link"><span>Bekat:</span>    {{   $callback->bekat }}</a>
				</li>

				<li>
					<a href="mailto:" class="connect__list__link"><span>Elektron pochta:</span>    {{    $callback->email }}</a>
				</li>

				<li>
					<a href="tel:71 244-84-19" class="connect__list__link"><span>Telefon:</span>    {{    $callback->phone }}</a>
				</li>
			</ul>

		</div>
		@endforeach

	</section>

	<div class="connect__map">
		@foreach ($callbacks as $callback)
		     {!! $callback->frame !!}
		@endforeach
	</div>
</div>

<!-- Connect end -->

@endsection