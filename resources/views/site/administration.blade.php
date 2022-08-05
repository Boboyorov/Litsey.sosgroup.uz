@extends('layouts.site')

@section('content')
		
<!-- Administration start -->

<div class="administration" style="background: url(/assets/foto/administration.png);">
	<section class="container">
		<div class="administration__cart">
			<h2 class="administration__title__h2">Ma’muriyat</h2>
			<ul class="administration__menu">
				<li><a href="/" class="administration__main__link">Bosh sahifa</a></li>
				<li><span></span></li>
				<li><a href="#!" class="administration__main__link">Ma’muriyat</a></li>
			</ul>
		</div>
	</section>
</div>

<!-- Administration end -->



<!-- Academic start -->

<div class="academic">
	<section class="container">
		<div class="academic__cart">
			<h2 class="about__title__h2">Akademik litsey ma'muriyati</h2>

			<div class="academic__list">

				@foreach ($administrators as $administrator)		
				<div class="academic__item">
					<a href="#!">
						<div class="academic__img">
						  <img src="{{ asset($administrator->image) }}" alt="academic">
						</div>

						<div class="academic__clikc">
							<div class="academic__clikc__active">
								<button class="academic__button__active"><i class="fas fa-times"></i></button>
								 <h2 class="academic__title__h2">{{ $administrator->username }}</h2>
						        <h4 class="academic__title__h4">{{ $administrator->title }}</h4>
						        <div class="academic__text">
							    <p>
								    {!! $administrator->content !!}
							    </p>
						    </div>
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</section>
</div>

<!-- Academic end -->

@endsection