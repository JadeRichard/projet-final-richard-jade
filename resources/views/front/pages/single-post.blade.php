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
                                        <li><a href="single-post.html">Single Post</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="single-post">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="classic-posts">
                                    <div class="single-item">
                                        <img src={{ asset('images/' . $articles->picture) }} alt="">
                                        <ul>
                                            <li>Posted: <em>{{ $articles->date }}</em></li>
                                            <li>By: <em>{{ $articles->user()->first()->name }}</em></li>
                                            <li>Comments: <em>{{ count($articles->comments) }}</em></li>
                                        </ul>
                                        <a href="single-post.html">
                                            <h4>{{ $articles->title }}</h4>
                                        </a>
                                        <p>{{ $articles->description_2 }}</p>
                                        <div class="tags-share">
                                            <div class="tag">
                                                <i class="fa fa-tags"></i>
                                                <p>Tags:</p><span>
                                                    @foreach ($articles->tags as $item)
                                                        <a href="#">{{ $item->name }}</a>,
                                                    @endforeach
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments">
                                    <div class="heading">
                                        <h2>Comments</h2>
                                    </div>

                                    @foreach ($articles->comments as $item)
                                        <div class="comment-item">
											<img src="{{ asset('images/' . $item->picture) }}" alt="" width="100px">
                                            
                                            <h4>{{ $item->name }}</h4>
                                            <span>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                            <p>{{ $item->content }}</p>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="leave-comment">
                                    <div class="heading">
                                        <h2>Leave a comment</h2>
                                    </div>
                                    <div class="comment-form">
                                        <form action='{{ route('singlepostcreate', $articles->id) }}' method='post'
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" id="name" name="name" placeholder="Full Name"
                                                        value="">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" id="address" name="email"
                                                        placeholder="E-mail Address" value="">
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea id="message" class="message" name="content" placeholder="Write comment"></textarea>
                                                </div>
                                            </div>
                                            <div class="accent-button">
                                                <button class="btn btncus2" type='submit'
                                                    style="background-color: #A12C2F; color: white;">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="side-bar">
                                    <div class="categories">
                                        <div class="widget-heading">
                                            <h4>Categories</h4>
                                        </div>
                                        <ul>
                                            @foreach ($articles->categories as $item)
                                                <li><a href="#"><i class="fa fa-angle-right"></i>{{ $item->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tags">
                                        <div class="widget-heading">
                                            <h4>Tags</h4>
                                        </div>
                                        <ul>
                                            @foreach ($articles->tags as $item)
                                                <li><a href="#">{{ $item->name }}</a></li>
                                            @endforeach
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