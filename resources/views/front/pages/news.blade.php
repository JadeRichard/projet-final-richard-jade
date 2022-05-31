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


                                    @foreach ($articles as $news)
                                        <div class="classic-item" id="result">
                                            <a href={{ route('singlepost', $news->id) }}><img
                                                    src={{ asset('images/' . $news->picture) }} alt=""></a>
                                            <ul>
                                                <li>Posted: <em>{{ $news->date }}</em></li>
                                                <li>By: <em>{{ $news->user->name }}</em></li>
                                                <li>Comments: <em>{{ count($news->comments) }}</em></li>
                                            </ul>
                                            <a href={{ route('singlepost', $news->id) }}>
                                                <h4>{{ $news->title }}</h4>
                                            </a>
                                            <p>{{ $news->description_1 }}</p>
                                            <div class="buttons">
                                                <div class="accent-button">
                                                    <a href={{ route('singlepost', $news->id) }}>Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="pagination-navigation">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {{ $articles->links('vendor.pagination.custom') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

                            <script type="text/javascript">
                                $(document).ready(function() {

                                    function fetch_data(search = "") {
                                        $.ajax({
											url: BASE_URL + '/search/' + search,
                                            /* url: BASE_URL + "/news_search?search=" + search, */
                                            success: function(data) {
                                                $('.x_content tbody').html(data);
                                            }
                                        })
                                    }

                                    $(document).on('keyup', '#search_i', function() {
                                        var search = $('#search_i').val();
                                        fetch_data(search);
                                    });


                                });
                            </script>

                            <div class="col-md-4">
                                <div class="side-bar">
                                    <div class="search-box">
                                        <form action="#" method="get">
                                            <input type="text" name="s" placeholder="Search..." id="search_i">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
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
