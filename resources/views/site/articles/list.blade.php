@extends('layouts.site')

@section('content')


<!-- Administration start -->

<div class="administration" style="background: url(/assets/foto/administration.png);">
	<section class="container">
		<div class="administration__cart">
			<h2 class="administration__title__h2">Yangiliklar</h2>
			<ul class="administration__menu">
				<li><a href="{{ asset('/') }}" class="administration__main__link">Bosh sahifa</a></li>
				<li><span></span></li>
				<li><a  class="administration__main__link">Yangiliklar</a></li>
			</ul>
		</div>
	</section>
</div>

<!-- Administration end -->


<!-- news_xb start -->

<div class="news_xb">
	<section class="container">
		<div class="news_xb__cart">
			<h2 class="about__title__h2">Yangiliklar</h2>

				<div class="ads_xb__list">
				
					<div class="ads__list">
						@foreach ($articles as $article)
						<div class="ads__item">
							<a href="{{ route('article', $article->id) }}">
								<div class="ads__list__img">
									<img src="{{ asset($article->image) }}" alt="news">
								</div>
								<h4 class="ads__item__title__h4">{{ $article->created_at->format('d.m.Y') }}</h4>
								<h3 class="ads__item__title__h3">{{ $article->title }}</h3>
								<div class="ads__item__text">
									<p>
									{!! $article->content !!}
									</p>
								</div>
	
								<h4 class="ads__title__h4">barchasi</h4>
							</a>
						</div>
						@endforeach

					</div>
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
	</section>
</div>
@endsection