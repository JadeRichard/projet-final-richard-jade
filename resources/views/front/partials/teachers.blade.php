<section class="our-teachers">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center">
                <h1>Our Teachers</h1>
                <img src={{ asset('images/line-dec.png') }} alt="">
                <p>High Life squid literally scenester fap Helvetica quinoa church-key</p>
            </div>
        </div>
        <div class="row">


            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href={{ route('singleteacher', $firstteacher->id) }}><img
                                src="{{ asset('images/' . $firstteacher->picture) }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href={{ route('singleteacher', $firstteacher->id) }}>
                            <h4>{{ $firstteacher->name }}</h4>
                        </a>
                        <span>{{ $firstteacher->role }}</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial well post-ironic wes</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href={{ route('singleteacher', $randomteacher_1->id) }}><img
                                src="{{ asset('images/' . $randomteacher_1->picture) }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href={{ route('singleteacher', $randomteacher_1->id) }}>
                            <h4>{{ $randomteacher_1->name }}</h4>
                        </a>
                        <span>{{ $randomteacher_1->role }}</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial well post-ironic wes</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href={{ route('singleteacher', $randomteacher_2->id) }}><img
                                src="{{ asset('images/' . $randomteacher_2->picture) }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href={{ route('singleteacher', $randomteacher_2->id) }}>
                            <h4>{{ $randomteacher_2->name }}</h4>
                        </a>
                        <span>{{ $randomteacher_2->role }}</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial well post-ironic wes</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href={{ route('singleteacher', $lastteacher->id) }}><img
                                src="{{ asset('images/' . $lastteacher->picture) }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href={{ route('singleteacher', $lastteacher->id) }}>
                            <h4>{{ $lastteacher->name }}</h4>
                        </a>
                        <span>{{ $lastteacher->role }}</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial well post-ironic wes</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
