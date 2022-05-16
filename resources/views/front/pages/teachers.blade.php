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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>Samuel Delossantos</h4></a>
										<span>Math Teacher</span>
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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>Nick Smith</h4></a>
										<span>Physic Teacher</span>
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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>John Rosado</h4></a>
										<span>English Teacher</span>
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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>Maria Lehmann</h4></a>
										<span>Design Teacher</span>
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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>Samuel Delossantos</h4></a>
										<span>Math Teacher</span>
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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>John Rosado</h4></a>
										<span>English Teacher</span>
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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>Samuel Delossantos</h4></a>
										<span>Math Teacher</span>
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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>Maria Lehmann</h4></a>
										<span>Design Teacher</span>
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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>Samuel Delossantos</h4></a>
										<span>Math Teacher</span>
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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>Maria Lehmann</h4></a>
										<span>Design Teacher</span>
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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>Samuel Delossantos</h4></a>
										<span>Math Teacher</span>
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
							<div class="col-md-3">
								<div class="teacher-item">
									<img src={{ asset("images/teachers/teacher-1.png") }} alt="">
									<div class="down-content">
										<a href={{ route("single-teacher") }}><h4>Nick Smith</h4></a>
										<span>Physic Teacher</span>
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
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="pagination-navigation">
									<div class="row">
										<div class="col-md-6">
											<div class="pagination">
												<ul>
													<li><a href="#">1</a></li>
													<li class="active"><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-6">
											<div class="navigation">
												<ul>
													<li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
													<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
												</ul>
											</div>
										</div>
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
