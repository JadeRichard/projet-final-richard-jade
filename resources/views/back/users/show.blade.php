@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Users</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Name</th>
                    <th scope='col'style="text-align: center;">Email</th>
                    <th scope='col'style="text-align: center;">Password</th>
                    <th scope='col'style="text-align: center;">Role</th>
                    <th scope='col'style="text-align: center;">Picture</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $users->id }}</th>
                        <td style="text-align: center;">{{ $users->name }}</td>
                        <td style="text-align: center;">{{ $users->email }}</td>
                        <td style="text-align: center;">{{ $users->password }}</td>
                        <td style="text-align: center;">
                            @foreach ($users->roles as $role)
                                {{ $role->name }}
                            @endforeach
                        </td>
                        <td style="text-align: center;"><img src='{{ asset("images/". $users->picture) }}' width='100px' height='100px' alt='' class='img-fluid'></td>

                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('users.index') }}"  style="background-color: #A12C2F; color: white;">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
