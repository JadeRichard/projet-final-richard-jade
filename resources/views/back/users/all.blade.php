@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')


    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Users</h1>
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
        
        @can('create', App\User::class)
        <a href="{{ route('users.create') }}" class="btn btncus mb-5" style="background-color: #A12C2F; color: white;">Create</a>
        @endcan

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Name</th>
                    <th scope='col'style="text-align: center;">Email</th>
                    <th scope='col'style="text-align: center;">Password</th>
                    <th scope='col'style="text-align: center;">Roles</th>
                    <th scope='col'style="text-align: center;">Picture</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->name }}</td>
                        <td style="text-align: center;">{{ $item->email }}</td>
                        <td style="text-align: center;">{{ $item->password }}</td>
                        <td style="text-align: center;"> 
                            @foreach ($item->roles as $role)
                                {{ $role->name }}
                            @endforeach
                        </td>
                        <td style="text-align: center;"><img src='{{ asset("images/". $item->picture) }}' width='100px' height='100px' alt='' class='img-fluid'></td>
                        </td>
                        <td style="text-align: center;"> 
                            <div class='d-flex justify-content-center'>
                                @can('update', $item)
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;" href='{{ route('users.edit', $item->id) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;" href='{{ route('users.show', $item->id) }}' role='button'>Read</a>
                                
                            @can('delete', $item)
                            <form action="{{ route('users.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btncus2 mx-2" style="background-color: #A12C2F; color: white;" >Delete</button>
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
