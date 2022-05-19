@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Events</h1>
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
                    <th scope='row'>{{ $events->id }}</th>
                    <td style="text-align: center;"><img src='{{ asset("images/". $events->picture) }}' width='100px' height='100px' alt='' class='img-fluid'></td>
                    <td style="text-align: center;">{{ $events->title }}</td>
                    <td style="text-align: center;">{{ $events->description }}</td>
                    <td style="text-align: center;">{{ $events->date }}</td>
                    <td style="text-align: center;">{{ $events->start_time }}</td>
                    <td style="text-align: center;">{{ $events->end_time }}</td>
                    <td style="text-align: center;">{{ $events->location }}</td>
                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('events.index') }}"  style="background-color: #A12C2F; color: white;">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
