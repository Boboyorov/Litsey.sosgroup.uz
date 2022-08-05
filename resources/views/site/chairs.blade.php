@extends('layouts.site')

@section('content')


<!-- Administration start -->

<div class="administration" style="background: url(/assets/foto/administration.png);">
	<section class="container">
		<div class="administration__cart">
			<h2 class="administration__title__h2">Kafedralar</h2>
			<ul class="administration__menu">
				<li><a href="{{ asset('/') }}" class="administration__main__link">Bosh sahifa</a></li>
				<li><span></span></li>
				<li><a class="administration__main__link">Kafedralar</a></li>
			</ul>
		</div>
	</section>
</div>

<!-- Administration end -->


<!-- Chairs start -->

<div class="chairs">
	<section class="container">
		<div class="chairs__cart">
			<h2 class="about__title__h2">Kafedralar</h2>

			<div class="chairs__list">
				@foreach ($departments as $department)
				<div class="chairs__item">
					<a href="{{ route('chairs.show',$department->id) }}">
						<div class="chairs__img">
							<img src="{{ asset($department->image) }}" alt="chairs">
							<h3 class="chairs__title__h3">{{ $department->title }}</h3>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</section>
</div>

<!-- Chairs end -->

@endsection