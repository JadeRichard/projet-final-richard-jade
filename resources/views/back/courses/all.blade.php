@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')


    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Courses</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{ route('courses.create') }}" class="btn btncus mb-5"
            style="background-color: #A12C2F; color: white;">Create</a>

        <h2>Published courses</h2>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' style="text-align: center;">#</th>
                    <th scope='col' style="text-align: center;">Title</th>
                    <th scope='col' style="text-align: center;">Description</th>
                    <th scope='col' style="text-align: center;">Picture</th>
                    <th scope='col' style="text-align: center;">Picture 2</th>
                    <th scope='col' style="text-align: center;">Picture 3</th>
                    <th scope='col' style="text-align: center;">Picture 4</th>
                    <th scope='col' style="text-align: center;">Date</th>
                    <th scope='col' style="text-align: center;">Duration</th>
                    <th scope='col' style="text-align: center;">Price</th>
                    <th scope='col' style="text-align: center;">Study Level</th>
                    <th scope='col' style="text-align: center;">Discipline</th>
                    <th scope='col' style="text-align: center;">Categories</th>
                    @if (auth()->user()->id == 1)
                        <th scope='col' style="text-align: center;">Is published</th>
                        <th scope='col' style="text-align: center;">Is popular</th>
                    @endif
                    <th scope='col' style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses->where('is_published', '=', true) as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->title }}</td>
                        <td style="text-align: center;">{{ $item->description }}</td>
                        <td style="text-align: center;"><img src='{{ asset('images/' . $item->picture) }}' width='100px'
                                height='100px' alt='' class='img-fluid'></td>
                        <td style="text-align: center;"><img src='{{ asset('images/' . $item->picture_2) }}' width='100px'
                                height='100px' alt='' class='img-fluid'></td>
                        <td style="text-align: center;"><img src='{{ asset('images/' . $item->picture_3) }}' width='100px'
                                height='100px' alt='' class='img-fluid'></td>
                        <td style="text-align: center;"><img src='{{ asset('images/' . $item->picture_4) }}' width='100px'
                                height='100px' alt='' class='img-fluid'></td>
                        <td style="text-align: center;">{{ $item->date }}</td>
                        <td style="text-align: center;">{{ $item->duration }}</td>

                        @if ($item->price == 0)
                            <td style="text-align: center;">Free</td>
                        @else
                            <td style="text-align: center;">{{ $item->price }}$/month</td>
                        @endif

                        <td style="text-align: center;">{{ $item->study_level }}</td>
                        <td style="text-align: center;">{{ $item->discipline }}</td>
                        <td style="text-align: center;">
                            @foreach ($item->categories as $categories)
                                {{ $categories->name }},
                            @endforeach
                        </td>
                        @if (auth()->user()->id == 1)
                            @if ($item->is_published == true)
                                <td style="text-align: center;">Yes</td>
                            @else
                                <td style="text-align: center;">No</td>
                            @endif
                            @if ($item->is_popular == true)
                                <td style="text-align: center;">Yes</td>
                            @else
                                <td style="text-align: center;">No</td>
                            @endif
                        @endif
                        <td style="text-align: center;">
                            <div class='d-flex justify-content-center'>
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                    href='{{ route('courses.edit', $item->id) }}' course='button'>Edit</a>
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                    href='{{ route('courses.show', $item->id) }}' course='button'>Read</a>

                                @can('delete', $item)
                                    <form action="{{ route('courses.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btncus2 mx-2"
                                            style="background-color: #A12C2F; color: white;">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Draft courses</h2>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' style="text-align: center;">#</th>
                    <th scope='col' style="text-align: center;">Title</th>
                    <th scope='col' style="text-align: center;">Description</th>
                    <th scope='col' style="text-align: center;">Picture</th>
                    <th scope='col' style="text-align: center;">Date</th>
                    <th scope='col' style="text-align: center;">Duration</th>
                    <th scope='col' style="text-align: center;">Price</th>
                    <th scope='col' style="text-align: center;">Study Level</th>
                    <th scope='col' style="text-align: center;">Discipline</th>
                    <th scope='col' style="text-align: center;">Categories</th>
                    @if (auth()->user()->id == 1)
                        <th scope='col' style="text-align: center;">Is published</th>
                        <th scope='col' style="text-align: center;">Is popular</th>
                    @endif
                    <th scope='col' style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses->where('is_published', '=', false) as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->title }}</td>
                        <td style="text-align: center;">{{ $item->description }}</td>
                        <td style="text-align: center;"><img src='{{ asset('images/' . $item->picture) }}' width='100px'
                                height='100px' alt='' class='img-fluid'></td>
                        <td style="text-align: center;">{{ $item->date }}</td>
                        <td style="text-align: center;">{{ $item->duration }}</td>

                        @if ($item->price == 0)
                            <td style="text-align: center;">Free</td>
                        @else
                            <td style="text-align: center;">{{ $item->price }}$/month</td>
                        @endif

                        <td style="text-align: center;">{{ $item->study_level }}</td>
                        <td style="text-align: center;">{{ $item->discipline }}</td>
                        <td style="text-align: center;">
                            @foreach ($item->categories as $categories)
                                {{ $categories->name }},
                            @endforeach
                        </td>
                        @if (auth()->user()->id == 1)
                            @if ($item->is_published == true)
                                <td style="text-align: center;">Yes</td>
                            @else
                                <td style="text-align: center;">No</td>
                            @endif
                            @if ($item->is_popular == true)
                                <td style="text-align: center;">Yes</td>
                            @else
                                <td style="text-align: center;">No</td>
                            @endif
                        @endif
                        <td style="text-align: center;">
                            <div class='d-flex justify-content-center'>
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                    href='{{ route('courses.edit', $item->id) }}' course='button'>Edit</a>
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                    href='{{ route('courses.show', $item->id) }}' course='button'>Read</a>


                                @can('delete', $item)
                                    <form action="{{ route('courses.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btncus2 mx-2"
                                            style="background-color: #A12C2F; color: white;">Delete</button>
                                    </form>
                                @endcan

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
