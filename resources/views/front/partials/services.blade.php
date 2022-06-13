<section>
    <div class="welcome-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading">
                        <h1>Welcome to Educa</h1>
                        <span>Twee Vice synth stumptown</span>
                        <img src={{ asset('images/line-dec.png') }} alt="">
                        <p>Twee Vice synth stumptown, distillery aesthetic slow-carb Intelligentsia bitters
                            taxidermy<br>McSweeney's, flexitarian actually iPhone mlkshk brunch.</p>
                    </div>
                    <div class="row">

                        @foreach ($services as $service)
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    {!! $service->icon !!}
                                    <h4>{{ $service->title }}</h4>
                                    <div class="line-dec"></div>
                                    <p>{{ $service->description }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="request-information">
                        <div class="widget-heading" style="margin-bottom: 30px;">
                            <h4>Request Information</h4>
                        </div>

                        @if (auth()->check())
                            <div class="search-form">
                                <form action="{{ route('submitrequest') }}" method='post'
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="name" value="{{ auth()->user()->name }}">
                                    <input type="text" name="email" value="{{ auth()->user()->email }}">
                                    <div class="select">
                                    <select name="teacher" id="teacher">
                                        <option value="-1">Teacher of Interests</option>
                                        @foreach ($teachers as $teacher)
                                            <option name="teacher" value="{{ $teacher->name }}">{{ $teacher->name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="select">
                                    <select name="course" id="course">
                                        <option value="-1">Course of Interests</option>
                                        @foreach ($courses as $item)
                                            <option name="course" value="{{ $item->title }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="accent-button">
                                        <button type="submit" style="background-color: #EFBE37; color: white; text-transform: uppercase; padding: 10px; border: none; margin-top: 15px" >Submit
                                            Request</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="search-form">
                                @if (Route::has('login'))
                                    @auth
                                        <button class="btn"
                                            style="background-color: #EFBE37; color: white; text-transform: uppercase;"><a
                                                href="{{ url('register') }}"
                                                style="color: white;">Register</a></button><br><br>
                                        <button class="btn"
                                            style="background-color: #EFBE37; color: white; text-transform: uppercase;">><a
                                                href="{{ route('login') }}" style="color: white;">Login</a></button>
                                    @else
                                        <button class="btn"
                                            style="background-color: #EFBE37; color: white; text-transform: uppercase;">><a
                                                href="{{ url('register') }}"
                                                style="color: white;">Register</a></button><br><br>
                                        <button class="btn"
                                            style="background-color: #EFBE37; color: white; text-transform: uppercase;">><a
                                                href="{{ route('login') }}" style="color: white;">Login</a></button>
                                    @endauth
                                @endif
                            </div>
                        @endif

                        {{-- <div class="search-form">
                            <input type="text" id="name" name="s" placeholder="Full Name" value="">
                            <input type="text" id="address" name="s" placeholder="E-mail Address" value="">
                            <div class="select">
                                <select name="mark" id="campus">
                                    <option value="-1">Campus of Interests</option>
                                      <option>Nearby</option>
                                      <option>High Classes</option>
                                      <option>Short Time</option>
                                      <option>Long Time</option>
                                </select>
                            </div>
                            <div class="select">
                                <select name="mark" id="program">
                                    <option value="-1">Program of Interests</option>
                                      <option>Wroking Process</option>
                                      <option>Archivements</option>
                                      <option>Social</option>
                                      <option>Profits</option>
                                </select>
                            </div>
                            <div class="accent-button">
                                <a href="#">Submit Request</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
