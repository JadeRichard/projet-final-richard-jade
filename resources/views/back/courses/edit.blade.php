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
                    <th scope='col'style="text-align: center;">Date</th>
                    <th scope='col'style="text-align: center;">Duration</th>
                    <th scope='col'style="text-align: center;">Price</th>
                    <th scope='col'style="text-align: center;">Study Level</th>
                    <th scope='col'style="text-align: center;">Discipline</th>
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
                        <td style="text-align: center;"> <input type="text" name="date" value="{{ $courses->date }}"></td>
                        <td style="text-align: center;"> <input type="text" name="duration" value="{{ $courses->duration }}"></td>
                        <td style="text-align: center;"> <input type="text" name="price" value="{{ $courses->price }}"></td>
                        <td style="text-align: center;"> <input type="text" name="study_level" value="{{ $courses->study_level }}"></td>
                        <td style="text-align: center;"> <input type="text" name="discipline" value="{{ $courses->discipline }}"></td>
                        <td style="text-align: center;"><button class="btn btncus2" type='submit'
                                style="background-color: #A12C2F; color: white;">Update</button></td>
                    </form>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
