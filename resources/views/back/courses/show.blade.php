@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Courses</h1>
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
                    <th scope='col'style="text-align: center;">Categories</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $courses->id }}</th>
                    <td style="text-align: center;">{{ $courses->title }}</td>
                    <td style="text-align: center;">{{ $courses->description }}</td>
                    <td style="text-align: center;"><img src='{{ asset("images/". $courses->picture) }}' width='100px' height='100px' alt='' class='img-fluid'></td>
                    <td style="text-align: center;">{{ $courses->date }}</td>
                    <td style="text-align: center;">{{ $courses->duration }}</td>
                    <td style="text-align: center;">{{ $courses->price }}</td>
                    <td style="text-align: center;">{{ $courses->study_level }}</td>
                    <td style="text-align: center;">{{ $courses->discipline }}</td>
                    <td style="text-align: center;">
                        @foreach ($articles->categories as $categories)
                            {{ $categories->name }}
                        @endforeach
                    </td>
                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('courses.index') }}"  style="background-color: #A12C2F; color: white;">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
