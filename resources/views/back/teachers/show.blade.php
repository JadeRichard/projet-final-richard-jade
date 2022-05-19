@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Teachers</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Name</th>
                    <th scope='col'style="text-align: center;">Email</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Picture</th>
                    <th scope='col'style="text-align: center;">Telephone</th>
                    <th scope='col'style="text-align: center;">Skype</th>
                    <th scope='col'style="text-align: center;">Role</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $teachers->id }}</th>
                    <td style="text-align: center;">{{ $teachers->name }}</td>
                    <td style="text-align: center;">{{ $teachers->email }}</td>
                    <td style="text-align: center;">{{ $teachers->description }}</td>
                    <td style="text-align: center;"><img src='{{ asset("images/". $teachers->picture) }}' width='100px' height='100px' alt='' class='img-fluid'></td>
                    <td style="text-align: center;">{{ $teachers->telephone }}</td>
                    <td style="text-align: center;">{{ $teachers->skype }}</td>
                    <td style="text-align: center;">{{ $teachers->role }}</td>
                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('teachers.index') }}"  style="background-color: #A12C2F; color: white;">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
