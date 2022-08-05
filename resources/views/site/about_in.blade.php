@extends('layouts.site')

@section('content')



<!-- Administration start -->

<div class="administration" style="background: url(/assets/foto/administration.png);">
	<section class="container">
		<div class="administration__cart">
			<h2 class="administration__title__h2">Akademik litsey faoliyati</h2>
			<ul class="administration__menu">
				<li><a href="{{ asset('/') }}" class="administration__main__link">Bosh sahifa</a></li>
				<li><span></span></li>
				<li><a class="administration__main__link">Akademik litsey faoliyati</a></li>
			</ul>
		</div>
	</section>
</div>

<!-- Administration end -->



<!-- Foreign start -->

<div class="foreign">
	<section class="container">
		@foreach ($videos as $video)
		<div class="foreign__cart">
       <h2 class="about__title__h2">Akademik litsey faoliyati</h2>
			 <div class="news__item__data">
				<p>{{ $video->created_at->format('d.m.Y') }}</p>
			</div>

			 <div class="foreign__list">
				  <div class="foreign__video">
						 <div>{!! $video->frame !!}</div>
					</div>

					<div class="foreign__text">
						<p>
					     {!! $video->content  !!}
						</p>
					</div>
				</div>
	</div>
	@endforeach
</section>
</div>

<!-- Foreign end -->



@endsection