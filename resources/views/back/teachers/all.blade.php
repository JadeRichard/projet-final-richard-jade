@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')


    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Teachers</h1>
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
        
        {{-- @can('create', App\Models\Teacher::class)
        <a href="{{ route('teachers.create') }}" class="btn btncus mb-5" style="background-color: #A12C2F; color: white;">Create</a>
        @endcan --}}

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
                @foreach ($teachers as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->name }}</td>
                        <td style="text-align: center;">{{ $item->email }}</td>
                        <td style="text-align: center;">{{ $item->description }}</td>
                        <td style="text-align: center;"><img src='{{ asset("images/". $item->picture) }}' width='100px' height='100px' alt='' class='img-fluid'></td>
                        <td style="text-align: center;">{{ $item->telephone }}</td>
                        <td style="text-align: center;">{{ $item->skype }}</td>
                        <td style="text-align: center;">{{ $item->role }}</td>
                        <td style="text-align: center;"> 
                            <div class='d-flex justify-content-center'>
                                @can('update', $item)
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;" href='{{ route('teachers.edit', $item->id) }}' teacher='button'>Edit</a>
                                @endcan
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;" href='{{ route('teachers.show', $item->id) }}' teacher='button'>Read</a>
                                
                            
                            <form action="{{ route('teachers.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btncus2 mx-2" style="background-color: #A12C2F; color: white;" >Delete</button>
                            </form>
                            
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
