<section class="popular-courses">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center">
                <h1>Popular Courses</h1>
                <img src={{ asset("images/line-dec.png") }} alt="">
                <p>Twee Vice synth stumptown distillery aesthetic slow carb</p>
            </div>
        </div>
        <div class="row">
            <div id="owl-courses">
    
                @foreach ($favcourses as $course)
                <div class="item course-item">
                    <a href={{ route("single-course") }}><img src="{{ asset("images/" . $course->picture) }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset("images/courses-icon.png") }}" style="height: 44px;" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>${{ $course->price }}</span>
                            <div class="base"></div>
                        </div>
                        <a href={{ route("single-course") }}><h4>{{ $course->title }}</h4></a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                        <div class="text-button">
                            <a href={{ route("single-course") }}>view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>