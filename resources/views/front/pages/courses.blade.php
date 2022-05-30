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
                                        <h4>showing 1-9 of {{ count($coursescount) }} courses</h4>
                                    </div>
                                    <div class="right-content">
                                        <div class="input-select">
                                            <select name="category_c" id="category_c">
                                                <option value="-1">Select Category</option>
                                                <option value="1">Free</option>
                                                <option value="2">Timing</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">


                            @if (request()->category_c == -1)
                                @foreach ($courses as $course)
                                    <div class="col-md-4">
                                        <div class="item course-item">
                                            <a href={{ route('singlecourse', $course->id) }}><img
                                                    src={{ asset('images/' . $course->picture) }} alt=""></a>
                                            <div class="down-content">
                                                <img src={{ asset('images/courses/courses-icon.png') }} alt="">
                                                <h6>Ernest Byrd</h6>
                                                @if ($course->price == 0)
                                                    <div class="price-yellow">
                                                        <span>Free</span>
                                                        <div class="base"></div>
                                                    </div>
                                                @else
                                                    <div class="price-red">
                                                        <span>${{ $course->price }}</span>
                                                        <div class="base"></div>
                                                    </div>
                                                @endif

                                                <a href={{ route('singlecourse', $course->id) }}>
                                                    <h4>{{ $course->title }}</h4>
                                                </a>
                                                <p>{{ $course->description }}</p>
                                                <div class="text-button">
                                                    <a href={{ route('singlecourse', $course->id) }}>view more<i
                                                            class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @elseif (request()->category_c = 1)
                                @foreach ($coursesoldest as $course)
                                    <div class="col-md-4">
                                        <div class="item course-item">
                                            <a href={{ route('singlecourse', $course->id) }}><img
                                                    src={{ asset('images/' . $course->picture) }} alt=""></a>
                                            <div class="down-content">
                                                <img src={{ asset('images/courses/courses-icon.png') }} alt="">
                                                <h6>Ernest Byrd</h6>
                                                @if ($course->price == 0)
                                                    <div class="price-yellow">
                                                        <span>Free</span>
                                                        <div class="base"></div>
                                                    </div>
                                                @else
                                                    <div class="price-red">
                                                        <span>${{ $course->price }}</span>
                                                        <div class="base"></div>
                                                    </div>
                                                @endif

                                                <a href={{ route('singlecourse', $course->id) }}>
                                                    <h4>{{ $course->title }}</h4>
                                                </a>
                                                <p>{{ $course->description }}</p>
                                                <div class="text-button">
                                                    <a href={{ route('singlecourse', $course->id) }}>view more<i
                                                            class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @elseif (request()->category_c = 2)
                                @foreach ($courses->where('price', '=', 0) as $course)
                                    <div class="col-md-4">
                                        <div class="item course-item">
                                            <a href={{ route('singlecourse', $course->id) }}><img
                                                    src={{ asset('images/' . $course->picture) }} alt=""></a>
                                            <div class="down-content">
                                                <img src={{ asset('images/courses/courses-icon.png') }} alt="">
                                                <h6>Ernest Byrd</h6>
                                                @if ($course->price == 0)
                                                    <div class="price-yellow">
                                                        <span>Free</span>
                                                        <div class="base"></div>
                                                    </div>
                                                @else
                                                    <div class="price-red">
                                                        <span>${{ $course->price }}</span>
                                                        <div class="base"></div>
                                                    </div>
                                                @endif

                                                <a href={{ route('singlecourse', $course->id) }}>
                                                    <h4>{{ $course->title }}</h4>
                                                </a>
                                                <p>{{ $course->description }}</p>
                                                <div class="text-button">
                                                    <a href={{ route('singlecourse', $course->id) }}>view more<i
                                                            class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif


                            <div class="row">
                                <div class="col-md-12">
                                    {{ $courses->links('vendor.pagination.custom') }}
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
