@extends('layouts.site')

@section('content')
	
<!-- slaeder start -->

<div class="slaeder">
	<div class="slaeder__top__slik">

     @foreach ($sliders as $slider)
			<div class="slaeder__top__slik__item" style="background: linear-gradient(0deg, rgba(18, 54, 84, 0.5), rgba(18, 54, 84, 0.5)), url({{ asset($slider->image) }});">
					<section class="container">
						<div class="slaeder__list">
							<h2 class="slaeder__title__h2">{{ $slider->title }}</h2>
							<div class="slaeder__list__text">
								<p>{{ $slider->description }}</p>
							</div>
						</div>
					</section>
			</div>

			@endforeach
	</div>
</div>

<!-- slaeder end -->


<!-- about start -->

<div class="about">
  <section class="container">
		@foreach ($videos as $video)
		 <div class="about__list">
		  	<div class="about__item">
			  	<h2 class="about__title__h2">Akademik litsey faoliyati</h2>
			   	<div class="about__text">
					<p>
						{!! $video->content !!}
					</p>
				</div>
				<a href="{{ asset('/about_in') }}" class="news__link">barchasi <span><img src="{{ asset('/assets/foto/news_lift.png') }}" alt="news"></span></a>
			</div>

			<div class="about__item">
				<div class="about__cart__video">	 
					 <div>{!! $video->frame !!}</div> 
					</div>
			</div>
		</div>
		@endforeach
	</section>
</div>

<!-- about end -->


<!-- statistics start -->

<div class="statistics">
	<section class="container">
		<div class="statistics__cart">
			 <h2 class="statistics__title__h2">Litsey statistikasi</h2>

			 <div class="statistics__list">
				  <div class="statistics__item">
					  <h1 class="statistics__title__h1"><span class="number">95</span> %</h1>
					  <h4 class="statistics__title__h4">OTMGA KIRISH</h4>
				  </div>

					<div class="statistics__item">
					  <h1 class="statistics__title__h1"><span class="number">57</span> %</h1>
					  <h4 class="statistics__title__h4">MILLIY UNIVERSITETLARGA</h4>
				  </div>

					<div class="statistics__item">
					  <h1 class="statistics__title__h1"><span class="number">43</span> %</h1>
					  <h4 class="statistics__title__h4">XORIJIY UNIVERSITETLARGA</h4>
				  </div>

					<div class="statistics__item">
					  <h1 class="statistics__title__h1"><span class="number">5</span></h1>
					  <h4 class="statistics__title__h4">O'QITISH YO'NALISHLARI</h4>
				  </div>

					<div class="statistics__item">
					  <h1 class="statistics__title__h1"><span class="number">24</span> <span>tadan ortiq</span></h1>
					  <h4 class="statistics__title__h4">XORIJ DAVLATLARIDA IHT BITIRUVCHILARI SONI</h4>
				  </div>

					<div class="statistics__item">
					  <h1 class="statistics__title__h1"><span class="number">12</span> <span>dan ortiq mamlakatlar</span></h1>
					  <h4 class="statistics__title__h4">IHTDA CHET EL FUQAROLARI</h4>
				  </div>

			 </div>
		</div>
	</section>
</div>

<!-- statistics end  -->


<!-- news start -->

<div class="news">
	<section class="container">

		{{-- @if($articles->count( > 0) ) --}}

		<div class="news__title__list">
			<h2 class="about__title__h2">Yangiliklar</h2>
			<a href="{{ asset('/articles') }}" class="news__link">barchasi <span><img src="{{ asset('/assets/foto/news_lift.png') }}" alt="news"></span></a>
		</div>

		<div class="news__list">
			<div class="news__cart">
				 <a href="{{ route('article', $articles[0]->id) }}">
					<div class="news__cart__img">
						<img src="{{ asset($articles[0]->image) }}" alt="news">

						<div class="news__cart__data">
							<p>
								   {{ $articles[0]->created_at->format('d.m Y') }} 
							</p>
						 </div>
					 </div>

					 <h3 class="news__cart__title__h2">{{ $articles[0]->title }}</h3>
					 <div class="news__cart__text">
						<p>{{ strip_tags(mb_substr($articles[0]->{'content'}, 0, 538)) }}
						</p>
					 </div>
					 <h4 class="ads__title__h4">barchasi</h4>
				 </a>
			</div>

			<div class="news__item__list">
				@foreach ($articles as $key => $article)
				@if ($key > 0)
				<div class="news__item">
					<a href="{{ route('article', $article->id) }}">
						<div class="news__item__img">
							<img src="{{ asset($article->image) }}" alt="news">
						</div>

						<div class="news__item__max2">
							<div class="news__item__data">
								<p>{{ $article->created_at->format('d/m/Y') }}</p>
							</div>
							<h3 class="news__cart__title__h2">{{ $article->title }}</h3>
							<h4 class="ads__title__h4">barchasi</h4>
						</div>
					</a>
				</div>
				@endif
			@endforeach

			</div>
		</div>
	</section>
</div>
<!-- news end -->

<!-- ads start -->
<div class="ads">
	<section class="container">
		<div class="news__title__list">
			<h2 class="about__title__h2">E’lonlar</h2>
			<a href="{{ asset('/varticles') }}" class="news__link">barchasi <span><img src="{{ asset('/assets/foto/news_lift.png') }}" alt="news"></span></a>
		</div>
		
		<div class="ads__list">
			@foreach ($varticles as $key => $varticle)
			 <div class="ads__item">
				<a href="{{ route('varticle', $varticle->id) }}">
					<div class="ads__list__img">
						<img src="{{ asset($varticle->image) }}" alt="ads">
					</div>
					<h4 class="ads__item__title__h4">{{ $varticle->created_at->format('d-m-Y') }}</h4>
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
	</section>
</div>

<!-- ads end -->


<!-- brand start -->

<div class="brand">
	<section class="container">
		<div class="brand__cart">
			<h2 class="about__title__h2">Bizning hamkorlar</h2>

			<div class="brand__list">

				<div class="brand__item">
					<a href="#!">
						<img src="{{ asset('/assets/foto/brand_1.png') }}" alt="brand">
					</a>
				</div>

				<div class="brand__item">
					<a href="#!">
						<img src="{{ asset('/assets/foto/brand_2.png') }}" alt="brand">
					</a>
				</div>

				<div class="brand__item">
					<a href="#!">
						<img src="{{ asset('/assets/foto/brand_3.png') }}" alt="brand">
					</a>
				</div>

				<div class="brand__item">
					<a href="#!">
						<img src="{{ asset('/assets/foto/brand_4.png') }}" alt="brand">
					</a>
				</div>

				<div class="brand__item">
					<a href="#!">
						<img src="{{ asset('/assets/foto/brand_5.png') }}" alt="brand">
					</a>
				</div>

				<div class="brand__item">
					<a href="#!">
						<img src="{{ asset('/assets/foto/brand_6.png') }}" alt="brand">
					</a>
				</div>

				<div class="brand__item">
					<a href="#!">
						<img src="{{ asset('/assets/foto/brand_7.png') }}" alt="brand">
					</a>
				</div>

				<div class="brand__item">
					<a href="#!">
						<img src="{{ asset('/assets/foto/brand_8.png') }}" alt="brand">
					</a>
				</div>

				<div class="brand__item">
					<a href="#!">
						<img src="{{ asset('/assets/foto/brand_9.png') }}" alt="brand">
					</a>
				</div>

				<div class="brand__item">
					<a href="#!">
						<img src="{{ asset('/assets/foto/brand_10.png') }}" alt="brand">
					</a>
				</div>

			</div>
		</div>
	</section>
</div>

<!-- brand end -->

@endsection