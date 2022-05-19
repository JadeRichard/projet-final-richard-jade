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

                    <td>
                        <form action='{{ route('courses.store') }}' method='post' enctype="multipart/form-data">
                            @csrf

                            <td style="text-align: center;"> <input type="text" name="title" value="{{ old('title') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="description" value="{{ old('description') }}"></td> 
                            <td style="text-align: center;"> <input type="file" name="picture" value=""></td>
                            <td style="text-align: center;"> <input type="text" name="date" value="{{ old('date') }}"></td> 
                            <td style="text-align: center;"> <input type="text" name="duration" value="{{ old('duration') }}"></td> 
                            <td style="text-align: center;"> <input type="text" name="price" value="{{ old('price') }}"></td> 
                            <td style="text-align: center;"> <input type="text" name="study_level" value="{{ old('study_level') }}"></td> 
                            <td style="text-align: center;"> <input type="text" name="discipline" value="{{ old('discipline') }}"></td> 
                            <td style="text-align: center;"> <input type="file" name="picture" value=""></td>
                            <td style="text-align: center;"><button class="btn btncus2" type='submit'
                                style="background-color: #A12C2F; color: white;">Create</button> </td>
                    </form>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
