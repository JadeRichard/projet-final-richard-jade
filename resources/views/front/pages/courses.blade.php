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
                            <h1>All Courses</h1>
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

            <section class="courses-grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pre-featured">
                                <div class="info-text">
                                    <h4>showing 1-9 of 40 courses</h4>
                                </div>
                                <div class="right-content">
                                    <div class="input-select">
                                        <select name="category" id="category">
                                            <option value="-1">Select Category</option>
                                              <option>Free</option>
                                              <option>Timing</option>
                                              <option>Mostly</option>
                                              <option>Latest</option>
                                        </select>
                                    </div>
                                    <div class="input-select">
                                        <select name="sorted" id="sorted">
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
                        <div class="col-md-4">
                            <div class="item course-item">
                                <a href={{ route("single-course") }}><img src={{ asset("images/courses/courses-1.png") }} alt=""></a>
                                <div class="down-content">
                                    <img src={{ asset("images/courses/courses-icon.png") }} alt="">
                                    <h6>Ernest Byrd</h6>
                                    <div class="price-red">
                                        <span>$19.99</span>
                                        <div class="base"></div>
                                    </div>
                                    <a href={{ route("single-course") }}><h4>How to become<br>a Powerful Speaker</h4></a>
                                    <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                                    <div class="text-button">
                                        <a href={{ route("single-course") }}>view more<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item course-item">
                                <a href={{ route("single-course") }}><img src={{ asset("images/courses/courses-1.png") }} alt=""></a>
                                <div class="down-content">
                                    <img src={{ asset("images/courses/courses-icon.png") }} alt="">
                                    <h6>Ernest Byrd</h6>
                                    <div class="price-red">
                                        <span>$49.99</span>
                                        <div class="base"></div>
                                    </div>
                                    <a href={{ route("single-course") }}><h4>Electrical &amp; Electronic <br>Engingering</h4></a>
                                    <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                                    <div class="text-button">
                                        <a href={{ route("single-course") }}>view more<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item course-item">
                                <a href={{ route("single-course") }}><img src={{ asset("images/courses/courses-1.png") }} alt=""></a>
                                <div class="down-content">
                                    <img src={{ asset("images/courses/courses-icon.png") }} alt="">
                                    <h6>Ernest Byrd</h6>
                                    <div class="price-red">
                                        <span>$19.99</span>
                                        <div class="base"></div>
                                    </div>
                                    <a href={{ route("single-course") }}><h4>How to become<br>a Powerful Speaker</h4></a>
                                    <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                                    <div class="text-button">
                                        <a href={{ route("single-course") }}>view more<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item course-item">
                                <a href={{ route("single-course") }}><img src={{ asset("images/courses/courses-1.png") }} alt=""></a>
                                <div class="down-content">
                                    <img src={{ asset("images/courses/courses-icon.png") }} alt="">
                                    <h6>Ernest Byrd</h6>
                                    <div class="price-yellow">
                                        <span>Free</span>
                                        <div class="base"></div>
                                    </div>
                                    <a href={{ route("single-course") }}><h4>What can you do<br>With a Business Degree?</h4></a>
                                    <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                                    <div class="text-button">
                                        <a href={{ route("single-course") }}>view more<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item course-item">
                                <a href={{ route("single-course") }}><img src={{ asset("images/courses/courses-1.png") }} alt=""></a>
                                <div class="down-content">
                                    <img src={{ asset("images/courses/courses-icon.png") }} alt="">
                                    <h6>Ernest Byrd</h6>
                                    <div class="price-red">
                                        <span>$29.99</span>
                                        <div class="base"></div>
                                    </div>
                                    <a href={{ route("single-course") }}><h4>Fashion buying<br>and Product Management</h4></a>
                                    <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                                    <div class="text-button">
                                        <a href={{ route("single-course") }}>view more<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item course-item">
                                <a href={{ route("single-course") }}><img src={{ asset("images/courses/courses-1.png") }} alt=""></a>
                                <div class="down-content">
                                    <img src={{ asset("images/courses/courses-icon.png") }} alt="">
                                    <h6>Ernest Byrd</h6>
                                    <div class="price-red">
                                        <span>$19.99</span>
                                        <div class="base"></div>
                                    </div>
                                    <a href={{ route("single-course") }}><h4>How to become<br>a Powerful Speaker</h4></a>
                                    <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                                    <div class="text-button">
                                        <a href={{ route("single-course") }}>view more<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item course-item">
                                <a href={{ route("single-course") }}><img src={{ asset("images/courses/courses-1.png") }} alt=""></a>
                                <div class="down-content">
                                    <img src={{ asset("images/courses/courses-icon.png") }} alt="">
                                    <h6>Ernest Byrd</h6>
                                    <div class="price-yellow">
                                        <span>Free</span>
                                        <div class="base"></div>
                                    </div>
                                    <a href={{ route("single-course") }}><h4>How to become<br>a Powerful Speaker</h4></a>
                                    <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                                    <div class="text-button">
                                        <a href={{ route("single-course") }}>view more<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item course-item">
                                <a href={{ route("single-course") }}><img src={{ asset("images/courses/courses-1.png") }} alt=""></a>
                                <div class="down-content">
                                    <img src={{ asset("images/courses/courses-icon.png") }} alt="">
                                    <h6>Ernest Byrd</h6>
                                    <div class="price-yellow">
                                        <span>Free</span>
                                        <div class="base"></div>
                                    </div>
                                    <a href={{ route("single-course") }}><h4>What can you do<br>With a Business Degree?</h4></a>
                                    <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                                    <div class="text-button">
                                        <a href={{ route("single-course") }}>view more<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item course-item">
                                <a href={{ route("single-course") }}><img src={{ asset("images/courses/courses-1.png") }} alt=""></a>
                                <div class="down-content">
                                    <img src={{ asset("images/courses/courses-icon.png") }} alt="">
                                    <h6>Ernest Byrd</h6>
                                    <div class="price-red">
                                        <span>$29.99</span>
                                        <div class="base"></div>
                                    </div>
                                    <a href={{ route("single-course") }}><h4>Fashion buying<br>and Product Management</h4></a>
                                    <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                                    <div class="text-button">
                                        <a href={{ route("single-course") }}>view more<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pagination-navigation">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="pagination">
                                            <ul>
                                                <li><a href="#">1</a></li>
                                                <li class="active"><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
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
