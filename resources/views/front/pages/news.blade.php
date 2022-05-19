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
								<h1>News</h1>
								<span>Salvia next level crucifix pickled heirloom synth</span>
								<div class="page-list">
									<ul>
										<li class="active"><a href="index.html">Home</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="classic-news.html">News</a></li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<section class="classic-news">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="classic-posts">
									<div class="classic-item">
										<a href={{ route("single-post") }}><img src={{ ("images/news/news-2.png") }} alt=""></a>
										<ul>
											<li>Posted: <em>7 Oct 2015</em></li>
											<li>By: <em>Admin</em></li>
											<li>Comments: <em>2</em></li>
										</ul>
										<a href={{ route("single-post") }}><h4>New University Finder: Compare</h4></a>
										<p>Church-key ugh sriracha slow-carb, +1 you probably haven't heard of them put a bird on it single-origin coffee. Pork belly irony chia, fann pack taxidermy Intelligentsia Pitchfork cliche tote bag stumptown authentic umami asymetrical. Bitters rof party fanny pack, street art you probably haven't heard of them Echo Park disrupt.</p>
										<div class="buttons">
											<div class="accent-button">
												<a href={{ route("single-post") }}>Continue Reading</a>
											</div>
										</div>
									</div>
									<div class="classic-item">
										<a href={{ route("single-post") }}><img src={{ ("images/news/news-2.png") }} alt=""></a>
										<ul>
											<li>Posted: <em>7 Oct 2015</em></li>
											<li>By: <em>Admin</em></li>
											<li>Comments: <em>2</em></li>
										</ul>
										<a href={{ route("single-post") }}><h4>How Do Students Use Rankings?</h4></a>
										<p>Church-key ugh sriracha slow-carb, +1 you probably haven't heard of them put a bird on it single-origin coffee. Pork belly irony chia, fann pack taxidermy Intelligentsia Pitchfork cliche tote bag stumptown authentic umami asymetrical. Bitters rof party fanny pack, street art you probably haven't heard of them Echo Park disrupt.</p>
										<div class="buttons">
											<div class="accent-button">
												<a href={{ route("single-post") }}>Continue Reading</a>
											</div>
										</div>
									</div>
									<div class="classic-item">
										<a href={{ route("single-post") }}><img src={{ ("images/news/news-2.png") }} alt=""></a>
										<ul>
											<li>Posted: <em>7 Oct 2015</em></li>
											<li>By: <em>Admin</em></li>
											<li>Comments: <em>2</em></li>
										</ul>
										<a href={{ route("single-post") }}><h4>Thousands enjoy Brick City Weekend events</h4></a>
										<p>Church-key ugh sriracha slow-carb, +1 you probably haven't heard of them put a bird on it single-origin coffee. Pork belly irony chia, fann pack taxidermy Intelligentsia Pitchfork cliche tote bag stumptown authentic umami asymetrical. Bitters rof party fanny pack, street art you probably haven't heard of them Echo Park disrupt.</p>
										<div class="buttons">
											<div class="accent-button">
												<a href={{ route("single-post") }}>Continue Reading</a>
											</div>
										</div>
									</div>
									<div class="classic-item block-quote">
										<i class="fa fa-quote-left"></i>
										<p>Church key ugh sriracha slow-carb, you probably haven't heard of them put bird single origin coffee. Pork belly irony chia, fann pack taxidermy Intelligent tote bag.</p>
										<h6>John Smith - Ceo Founder</h6>
									</div>
									<div class="classic-item">
										<a href={{ route("single-post") }}><img src={{ ("images/news/news-2.png") }} alt=""></a>
										<ul>
											<li>Posted: <em>7 Oct 2015</em></li>
											<li>By: <em>Admin</em></li>
											<li>Comments: <em>2</em></li>
										</ul>
										<a href={{ route("single-post") }}><h4>visiting artists: giles bailey</h4></a>
										<p>Church-key ugh sriracha slow-carb, +1 you probably haven't heard of them put a bird on it single-origin coffee. Pork belly irony chia, fann pack taxidermy Intelligentsia Pitchfork cliche tote bag stumptown authentic umami asymetrical. Bitters rof party fanny pack, street art you probably haven't heard of them Echo Park disrupt.</p>
										<div class="buttons">
											<div class="accent-button">
												<a href={{ route("single-post") }}>Continue Reading</a>
											</div>
										</div>
									</div>
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
							<div class="col-md-4">
								<div class="side-bar">
									<div class="search-box">
										<input type="text" class="search" name="s" placeholder="Search..." value="">
									</div>
									<div class="categories">
										<div class="widget-heading">
											<h4>Categories</h4>
										</div>
										<ul>
											<li><a href="#"><i class="fa fa-angle-right"></i>Design</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i>International</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i>Learning</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i>Read</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i>Education</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i>Finance</a></li>
										</ul>
									</div>
									<div class="tags">
										<div class="widget-heading">
											<h4>Tags</h4>
										</div>
										<ul>
											<li><a href="#">Photography</a></li>
											<li><a href="#">Design</a></li>
											<li><a href="#">Envanto</a></li>
											<li><a href="#">Course</a></li>
											<li><a href="#">Education</a></li>
											<li><a href="#">College</a></li>
											<li><a href="#">Teachers</a></li>
											<li><a href="#">Read</a></li>
											<li><a href="#">Excursions</a></li>
										</ul>
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
