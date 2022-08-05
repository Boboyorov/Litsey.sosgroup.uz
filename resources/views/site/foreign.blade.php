@extends('layouts.site')

@section('content')

<!-- Administration start -->

<div class="administration" style="background: url(/assets/foto/administration.png);">
	<section class="container">
		{{-- @foreach ($department as $item) --}}
{{-- @dd($department); --}}
		<div class="administration__cart">
			<h2 class="administration__title__h2">{{ $department['title'] }}</h2>
			<ul class="administration__menu">
				<li><a href="{{ asset('/chairs') }}" class="administration__main__link">Kafedralar</a></li>
				<li><span></span></li>
				<li><a  class="administration__main__link">{{ $department['title'] }}</a></li>
			</ul>
		</div>
		{{-- @endforeach --}}
	</section>
</div>

<!-- Administration end -->



<!-- Foreign start -->

<div class="foreign">
	<section class="container">
		
		{{-- @foreach ($department as $item) --}}
		<div class="foreign__cart">
       <h2 class="about__title__h2">{{ $department['title'] }}</h2>

			 <div class="foreign__list">
				  <div class="foreign__img">
						<img src="{{ asset($department['image']) }}" alt="foreign">
					</div>

					<div class="foreign__text">
						<p>
							{!! $department['text'] !!}
						</p>
					</div>
				</div>

				
				<div class="foreign__item__list">
					
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
	</div>
	{{-- @endforeach --}}
</section>
</div>


<!-- Foreign end -->

@endsection