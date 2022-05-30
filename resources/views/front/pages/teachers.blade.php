@extends('front.layouts.app')

@section('pages')
    
    <div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				@include('front.partials.header')

				<div class="page-heading teachers-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Our Teachers</h1>
								<span>Salvia next level crucifix pickled heirloom synth</span>
								<div class="page-list">
									<ul>
										<li class="active"><a href="index.html">Home</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="#">Pages</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="our-teachers.html">Our Teachers</a></li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<section class="teachers-page">
					<div class="container">
						<div class="row">

							@foreach ($teachers as $teachers)
							<div class="col-md-3">
								<div class="teacher-item">
									<a href={{ route('singleteacher', $teachers->id) }}><img src={{ asset("images/" . $teachers->picture) }} alt=""></a>
									<div class="down-content">
										<a href={{ route('singleteacher', $teachers->id) }}><h4>{{ $teachers->name }}</h4></a>
										<span>{{ $teachers->role }}</span>
										<p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							@endforeach

							
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							{{-- {{ $teachers->links('vendor.pagination.custom') }} --}}
						</div>
					</div>
				</section>

				@include('front.partials.action')

				@include('front.partials.footer')

			</div>

		</div>

		@include('front.partials.nav')

	</div>

@endsection
