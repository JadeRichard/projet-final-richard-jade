@extends('front.layouts.app')

@section('pages')
    
    <div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				@include('front.partials.header')

                <div class="page-heading news-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Contact Us</h1>
								<span>Salvia next level crucifix pickled heirloom synth</span>
								<div class="page-list">
									<ul>
										<li class="active"><a href="index.html">Home</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<section class="contact-info">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="contact-content">
									<div class="contact-item">
										<i class="fa fa-map-marker"></i>
										<h4>Address Info</h4>
										<p>{{ $maps[0]->location }}</p>
									</div>
									<div class="contact-item">
										<i class="fa fa-envelope-o"></i>
										<h4>Email Info</h4>
										<p>educa@university.com</p>
									</div>
									<div class="contact-item last-contact">
										<i class="fa fa-phone"></i>
										<h4>Phone Number</h4>
										<p>+1 (23) 207 0567 2120</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="contact-form">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="location-contact">
									<div class="widget-heading">
										<h4>Location Map</h4>
									</div>
									<div class="content-map">
										<iframe width="450" height="340" id="gmap_canvas"
										src="https://maps.google.com/maps?q={{ $maps[0]->location }}&t=h&z=21&ie=UTF8&iwloc=&output=embed&iwloc=B"
										frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="message-form">
									<div class="widget-heading">
										<h4>Contact Us</h4>
									</div>
									<div class="message-content">
										<form action="{{ route('contactmessage', $user->id )}}" method='post'>
											@csrf
											@if (auth()->check())
											<input type="text" id="name" name="name" placeholder="Full Name" value="{{ auth()->user()->name }}">
											<input type="text" id="address" name="email" placeholder="E-mail Address" value="{{ auth()->user()->email }}">
											@else
											<input type="text" id="name" name="name" placeholder="Full Name" value="">
											<input type="text" id="address" name="email" placeholder="E-mail Address" value="">
											@endif
											<textarea id="message" class="message" name="message" placeholder="Write message"></textarea>
											<div class="accent-button">
												<button type="submit" style="background-color: #EFBE37; color: white; text-transform: uppercase; padding: 10px; border: none; " >Send</button>
											</div>
										</form>

									</div>
								</div>
							</div>
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
