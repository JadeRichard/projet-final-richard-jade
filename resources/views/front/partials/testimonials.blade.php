<section class="testimonials-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-heading">
                    <h1>What Our Students Say</h1>
                    <img src={{ asset("images/line-dec.png") }} alt="">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="owl-testimonials">
                            <div class="item">
                                <i class="fa fa-quote-right"></i>
                                <p>Stumptown polaroid skateboard single-origin coffee. Farm-to-table Vice authentic Truffaut put a bird on it, pug ethical tousled photo booth gluten-free cliche bicycle rights four dollar toast single-origin coffee taxidermy.</p>
                                <img src="{{ asset("images/testimonial-1.png") }}" alt="">
                                <h4>Caroll m. davis</h4>
                                <span>Web Designer</span>
                            </div>
                            <div class="item">
                                <i class="fa fa-quote-right"></i>
                                <p>Stumptown polaroid skateboard single-origin coffee. Farm-to-table Vice authentic Truffaut put a bird on it, pug ethical tousled photo booth gluten-free cliche bicycle rights four dollar toast single-origin coffee taxidermy.</p>
                                <img src="{{ asset("images/testimonial-2.png") }}" alt="">
                                <h4>Peter j. smith</h4>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-heading university-news">
                    <h1>University News</h1>
                    <img src={{ asset("images/line-dec.png") }} alt="">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="news-item">
                            <a href="{{ route('singlepost', $lastarticles[0]->id ) }}"><img src="{{ asset("images/" . $lastarticles[0]->picture) }}" style="height: 130px;" alt=""></a>
                            <ul>
                                <li>{{ $lastarticles[0]->date }}</li>
                                <li>By {{ $lastarticles[0]->user->name }}</li>
                                <li>{{ count($lastarticles[0]->comments) }} comment.s</li>
                            </ul>
                            <a href="{{ route('singlepost', $lastarticles[0]->id ) }}"><h4>{{ $lastarticles[0]->title }}</h4></a>
                            <p>{{ $lastarticles[0]->description_1 }}</p>
                        </div>
                        <div class="news-item">
                            <a href="{{ route('singlepost', $lastarticles[1]->id ) }}"><img src="{{ asset("images/" . $lastarticles[1]->picture) }}" style="height: 130px;" alt=""></a>
                            <ul>
                                <li>{{ $lastarticles[1]->date }}</li>
                                <li>By {{ $lastarticles[1]->user->name }}</li>
                                <li>{{ count($lastarticles[1]->comments) }} comment.s</li>
                            </ul>
                            <a href="{{ route('singlepost', $lastarticles[1]->id ) }}"><h4>{{ $lastarticles[1]->title }}</h4></a>
                            <p>{{ $lastarticles[1]->description_1 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>