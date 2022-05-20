@extends('front.layouts.app')

@section('pages')
    
<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				@include("front.partials.header")

				<div class="page-heading events-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Events</h1>
								<span>Salvia next level crucifix pickled heirloom synth</span>
								<div class="page-list">
									<ul>
										<li class="active"><a href="index.html">Home</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="courses-grid.html">Courses Categories</a></li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<section class="events-grid">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="pre-featured">
									<div class="info-text">
										<h4>showing 1-9 of {{ count($eventscount) }} courses</h4>
									</div>
									<div class="right-content">
										<div class="input-select">
		                                    <select name="mark" id="mark">
		                                        <option value="-1">Select Category</option>
		                                          <option>Free</option>
		                                          <option>Timing</option>
		                                          <option>Mostly</option>
		                                          <option>Latest</option>
		                                    </select>
		                                </div>
		                                <div class="input-select">
		                                    <select name="mark" id="mark">
		                                        <option value="-1">Sorted by</option>
		                                          <option>Price</option>
		                                          <option>Useless</option>
		                                          <option>Important</option>
		                                    </select>
		                                </div>
		                                <div class="grid-list">
		                                	<ul>
		                                		<li><a href="#"><i class="fa fa-list"></i></a></li>
		                                		<li><a href="#"><i class="fa fa-th-large"></i></a></li>
		                                	</ul>
		                                </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">

							@foreach ($events as $event)
							<div class="col-md-4">
								<div class="event-item">
									<div class="thumb-holder">
										<img src={{ asset("images/" . $event->picture) }} alt="">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#">5 stars</a></li>
												<li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<ul>
											<li><i class="fa fa-map-marker"></i>{!! $event->location !!}</li>
											<li><i class="fa fa-clock-o"></i>{{ $event->start_time }} - {{ $event->end_time }}<br> {{ $event->date }}</li>
										</ul>
										<div class="date d-flex justify-content-center align-content-center">
											<p><span>{{ $event->start_time }}</span></p>
										</div>
										<a href="#"><h4>{{ $event->title }}</h4></a>
										<p>{{ $event->description }}</p>
									</div>
								</div>
							</div>
							@endforeach
							
						</div>
						<div class="row">
							<div class="col-md-12">
								{{ $events->links('vendor.pagination.custom') }}
							</div>
						</div>
					</div>
				</section>

				@include('front.partials.action')

				@include('front.partials.footer')

			</div>

		</div>

		@include("front.partials.nav")

	</div>

@endsection
