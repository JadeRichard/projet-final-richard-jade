@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1>Courses</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Title</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Picture</th>
                    <th scope='col'style="text-align: center;">Picture 2</th>
                    <th scope='col'style="text-align: center;">Picture 3</th>
                    <th scope='col'style="text-align: center;">Picture 4</th>
                    <th scope='col'style="text-align: center;">Date</th>
                    <th scope='col'style="text-align: center;">Duration</th>
                    <th scope='col'style="text-align: center;">Price</th>
                    <th scope='col'style="text-align: center;">Study Level</th>
                    <th scope='col'style="text-align: center;">Discipline</th>
                    <th scope='col'style="text-align: center;">Categories</th>
                    @if (auth()->user()->id == 1)
                    <th scope='col' style="text-align: center;">Is published</th>
                    @endif
                    <th scope='col'style="text-align: center;">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'  style="text-align: center;">{{ $courses->id }}</th>
                    <form action='{{ route('courses.update', $courses->id) }}' method='post' enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <td style="text-align: center;"> <input type="text" name="title" value="{{ $courses->title }}"></td>
                        <td style="text-align: center;"> <input type="text" name="description" value="{{ $courses->description }}"></td>
                        <td style="text-align: center;"> <input type="file" name="picture" value="{{ $courses->picture }}"></td>
                        <td style="text-align: center;"> <input type="file" name="picture_2" value="{{ $courses->picture_2 }}"></td>
                        <td style="text-align: center;"> <input type="file" name="picture_3" value="{{ $courses->picture_3 }}"></td>
                        <td style="text-align: center;"> <input type="file" name="picture_4" value="{{ $courses->picture_4 }}"></td>
                        <td style="text-align: center;"> <input type="text" name="date" value="{{ $courses->date }}"></td>
                        <td style="text-align: center;"> <input type="text" name="duration" value="{{ $courses->duration }}"></td>
                        <td style="text-align: center;"> <input type="number" name="price" value="{{ $courses->price }}"></td>
                        <td style="text-align: center;"> <input type="text" name="study_level" value="{{ $courses->study_level }}"></td>
                        <td style="text-align: center;"> <input type="text" name="discipline" value="{{ $courses->discipline }}"></td>
                        <td style="text-align: center;"> 
                            @foreach ($categories as $categories)
                            <div class='form-check'>
                                <input type='checkbox' id='checkbox{{ $categories->id }}' class='form-check-input' name='categories[]'
                                    value='{{ $categories->id }}'>
                                <label style="padding-left: 15px" for='checkbox{{ $categories->id }}'>{{ $categories->name }}</label>
                            </div>
                            @endforeach
                        </td>

                        @if (auth()->user()->id == 1)
                            <td style="text-align: center;">
                                <div class='form-check'>
                                    <input type='checkbox' id='checkboxis_published' class='form-check-input'
                                        name='is_published' value='1'>
                                    <label style="padding-left: 15px" for='checkboxis_published'>Yes</label>
                                </div>

                                <div class='form-check'>
                                    <input type='checkbox' id='checkboxis_published' class='form-check-input'
                                        name='is_published' value='0'>
                                    <label style="padding-left: 15px" for='checkboxis_published'>No</label>
                                </div>
                            </td>
                        @endif

                        <td style="text-align: center;"><button class="btn btncus2" type='submit'
                                style="background-color: #A12C2F; color: white;">Update</button></td>
                    </form>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
