@extends('layouts.site')

@section('content')


<!-- Administration start -->

<div class="administration" style="background: url(/assets/foto/administration.png);"> 
	<section class="container">
		<div class="administration__cart">
			<h2 class="administration__title__h2">{{ $varticle->title }}</h2>
			<ul class="administration__menu">
				<li><a href="{{ asset('/') }}" class="administration__main__link">Bosh sahifa</a></li>
				<li><span></span></li>
				<li><a href="{{ asset('/varticles') }}" class="administration__main__link">E'lonlar</a></li>
				<li><span></span></li>
        <li><a class="administration__main__link">{{ $varticle->title }}</a></li>
			</ul>
		</div>
	</section>
</div> 

<!-- Administration end -->

<!-- Foreign start -->

<div class="foreign">
	<section class="container">
		<div class="foreign__cart">
       <h2 class="about__title__h2">{{ $varticle->title }}</h2>
			 <div class="news__item__data">
				<p>{{ $varticle->created_at->format('d.m.Y') }}</p>
			</div>
			 <div class="foreign__list">
				  <div class="foreign__img">
						<img src="{{ asset($varticle->image) }}" alt="foreign">
					</div>
					<div class="foreign__text">
						<p>
							{!! $varticle->content !!}
						</p>
					</div>
				</div>
	</div>
</section>
</div>

<!-- Foreign end -->

@endsection