@extends('layouts.site')

@section('content')



<!-- news start -->

<div class="news">
	<section class="container">
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
 

@endsection