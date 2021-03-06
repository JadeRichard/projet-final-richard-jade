@extends('front.layouts.app')

@section('pages')
    
    <div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				@include('front.partials.header')

				<div class="page-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Single Course</h1>
								<span>Salvia next level crucifix pickled heirloom synth</span>
								<div class="page-list">
									<ul>
										<li class="active"><a href={{ route("/") }}>Home</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="courses-grid.html">{{ $courses->title }}</a></li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<section class="single-course">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="single-item">		
									<div class="row">		
										<div class="col-md-12">
											<div class="item course-item">
												<div class="up-content">
													<a href="single-course.html"><h4>{{ $courses->title }}</h4></a>
													<p>Plaid you probably haven't heard of them fashion axe meditation</p>
													<img src="{{ asset('images/' . $courses->user->picture) }}" alt="" style="width: 64px !important;" > 
													<h6>{{ $courses->user->name }}</h6>
													<div class="price-red">
														<span>Free</span>
														<div id="base"></div>
													</div>
												</div>
												<div class="courses-slider">
													<ul class="slides">
													    <li data-thumb={{ asset('images/' . $courses->picture) }} height="100px">
													      <img src="{{ asset('images/' . $courses->picture) }}" alt="" />
													    </li>
													    <li data-thumb={{ asset('images/' . $courses->picture_2) }} height="100px">
													      <img src={{ asset('images/' . $courses->picture_2) }} alt="" />
													    </li>
													    <li data-thumb={{ asset('images/' . $courses->picture_3) }} height="100px">
													      <img src={{ asset('images/' . $courses->picture_3) }} alt="" />
													    </li>
													    <li data-thumb={{ asset('images/' . $courses->picture_4) }}>
													      <img src={{ asset('images/' . $courses->picture_4) }} alt="" />
													    </li>
													</ul>
												</div>
											</div>
											<div class="description">
												<h4>Description</h4>
												<p>{{ $courses->description }}</p>
											</div>
											<div class="topics">
												<h4>Topics Included</h4>
												<div class="row">
													<div class="col-md-4">
														<ul>
															<li><i class="fa fa-check"></i>Ennui pickled asymmetrical</li>
															<li><i class="fa fa-check"></i>Kitsch keffiyeh crucifix ennui</li>
															<li><i class="fa fa-check"></i>Quinoa dreamcatcher food</li>
															<li><i class="fa fa-check"></i>Truck skateboard selvage bear</li>
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
															<li><i class="fa fa-check"></i>Fitsch keffiyeh crucifix ennui</li>
															<li><i class="fa fa-check"></i>Ennui pickled asymmetrical</li>
															<li><i class="fa fa-check"></i>Quinoa dreamcatcher food</li>
															<li><i class="fa fa-check"></i>Truck skateboard selvage bear</li>
														</ul>
													</div>												
													<div class="col-md-4">
														<ul>
															<li><i class="fa fa-check"></i>Ennui pickled asymmetrical</li>
															<li><i class="fa fa-check"></i>Truck skateboard selvage bear</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="accordions">
												<h4>Accordion</h4>
												<div class="accordion">
												    <div class="accordion-section">
												        <a class="accordion-section-title" href="#accordion-1"><span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>Short Courses:</span><h6><em>New Course</em>Master of Business Administration<span id="1" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-1" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title second-accordion-section-title" href="#accordion-2">	<span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>Post Graduated:</span><h6>Distance Learning MBA Business Management<span id="2" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-2" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title" href="#accordion-3">	<span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>CPD:</span><h6>Environmental Science BTEC (HND) Course<span id="3" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-3" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title second-accordion-section-title" href="#accordion-4"><span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>Post Graduated:</span><h6><em>
												        exam</em>Criminal Justice &amp; Criminology<span id="4" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-4" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title" href="#accordion-5">	<span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>Short Courses:</span><h6>Higher Level Teaching Assistant &amp; Child Psychology<span id="5" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-5" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title second-accordion-section-title" href="#accordion-6">	<span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>Other:</span><h6>TAP Training Delivery skills (for new trainers)<span id="6" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-6" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title" href="#accordion-7">	<span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>CPD:</span><h6>Find Courses, Telecourses &amp; Web Courses<span id="7" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-7" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="course-information">
									<div class="widget-heading">
										<h4>Course Information</h4>
									</div>
									<ul>
										<li><span>Starts:</span>{{ $courses->date }}</li>
										<li><span>Duration:</span>{{ $courses->duration }}</li>
										<li><span>Study Level:</span>{{ $courses->study_level }}</li>
										<li><span>Disipline</span>{{ $courses->discipline }}</li>
										<li><span>Price:</span>${{ $courses->price }} / month</li>
									</ul>
								</div>
								
								<div class="categories">
									<div class="widget-heading">
										<h4>Categories</h4>
									</div>
									<ul>
										@foreach ($courses->categories as $category)
										<li><a href="#"><i class="fa fa-angle-right"></i>{{ $category->name }}</a></li>
										@endforeach
										
									</ul>
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
