@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Panels</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' style="text-align: center;">#</th>
                    <th scope='col' style="text-align: center;">Teacher</th>
                    <th scope='col' style="text-align: center;">Course</th>
                    <th scope='col' style="text-align: center;">Request</th>
                    <th scope='col' style="text-align: center;">Name</th>
                    <th scope='col' style="text-align: center;">Email</th>
                    <th scope='col' style="text-align: center;">Date</th>
                    <th scope='col' style="text-align: center;">Time</th>
                    <th scope='col' style="text-align: center;">Is validated</th>
                    <th scope='col' style="text-align: center;">Action</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $panels->id }}</th>
                    
                    <td style="text-align: center;">{{ $panels->teacher }}</td>
                    <td style="text-align: center;">{{ $panels->course }}</td>
                    <td style="text-align: center;">{{ $panels->request }}</td>
                    <td style="text-align: center;">{{ $panels->name }}</td>
                    <td style="text-align: center;">{{ $panels->email }}</td>
                    <td style="text-align: center;">{{ $panels->date }}</td>
                    <td style="text-align: center;">{{ $panels->time }}</td>
                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('panels.index') }}"  style="background-color: #A12C2F; color: white;">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
