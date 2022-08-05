@extends('layouts.site')

@section('content')

<!-- Administration start -->

<div class="administration" style="background: url(/assets/foto/administration.png);">
	<section class="container">
		<div class="administration__cart">
			<h2 class="administration__title__h2">E’lonlar</h2>
			<ul class="administration__menu">
				<li><a href="{{ asset('/') }}" class="administration__main__link">Bosh sahifa</a></li>
				<li><span></span></li>
				<li><a class="administration__main__link">E’lonlar</a></li>
			</ul>
		</div>
	</section>
</div>

<!-- Administration end -->

<!-- ads start -->

<div class="ads_xb">
	<section class="container">
		<div class="ads_xb__cart">
			<h2 class="about__title__h2">E’lonlar</h2>
			<div class="ads_xb__list">	
				<div class="ads__list">
					@foreach ($varticles as $varticle)
					<div class="ads__item">
						<a href="{{ route('varticle', $varticle->id) }}">
							<div class="ads__list__img">
								<img src="{{ asset($varticle->image) }}" alt="ads">
							</div>
							<h4 class="ads__item__title__h4">{{ $varticle->created_at->format('d.m.Y') }}</h4>
							<h3 class="ads__item__title__h3">{{ $varticle->title }}</h3>
							<div class="ads__item__text">
								<p>
									{!! $varticle->content !!}
								</p>
							</div>
							<h4 class="ads__title__h4">barchasi</h4>
						</a>
					</div>
					@endforeach
				</div>


				{{-- <div>
					<ul class="news_xb__page">
						<li>
							<a href="#!" class="news_xb__page__next"><i class="fas fa-angle-left"></i></a>
						</li>
	
						<li>
							<a href="#!" class="news_xb__page__link">1</a>
						</li>
	
						<li>
							<a href="#!" class="news_xb__page__link">2</a>
						</li>
	
						<li>
							<a href="#!" class="news_xb__page__link">3</a>
						</li>
	
						<li>
							<a href="#!" class="news_xb__page__next"><i class="fas fa-angle-right"></i></a>
						</li>
					</ul>
				</div> --}}

			</div>
		</div>
	</section>
</div>

<!-- ads end -->

@endsection