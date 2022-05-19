@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1>Events</h1>
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
                    <th scope='col'style="text-align: center;">Picture</th>
                    <th scope='col'style="text-align: center;">Title</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Date</th>
                    <th scope='col'style="text-align: center;">Start Time</th>
                    <th scope='col'style="text-align: center;">End Time</th>
                    <th scope='col'style="text-align: center;">Location</th>
                    <th scope='col'style="text-align: center;">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'  style="text-align: center;">{{ $events->id }}</th>
                    <form action='{{ route('events.update', $events->id) }}' method='post' enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <td style="text-align: center;"> <input type="file" name="picture" value="{{ $events->picture }}"></td>
                        <td style="text-align: center;"> <input type="text" name="title" value="{{ $events->title }}"></td>
                        <td style="text-align: center;"> <input type="text" name="description" value="{{ $events->description }}"></td>
                        <td style="text-align: center;"> <input type="text" name="date" value="{{ $events->date }}"></td>
                        <td style="text-align: center;"> <input type="text" name="start_time" value="{{ $events->start_time }}"></td>
                        <td style="text-align: center;"> <input type="text" name="end_time" value="{{ $events->end_time }}"></td>
                        <td style="text-align: center;"> <input type="text" name="location" value="{{ $events->location }}"></td>
                        <td style="text-align: center;"><button class="btn btncus2" type='submit'
                                style="background-color: #A12C2F; color: white;">Update</button></td>
                    </form>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
