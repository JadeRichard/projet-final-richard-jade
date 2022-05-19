@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')


    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Banners</h1>
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
        
        <a href="{{ route('banners.create') }}" class="btn btncus mb-5" style="background-color: #A12C2F; color: white;">Create</a>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Title</th>
                    <th scope='col'style="text-align: center;">Accent</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Button</th>
                    <th scope='col'style="text-align: center;">Picture</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->title }}</td>
                        <td style="text-align: center;">{{ $item->accent }}</td>
                        <td style="text-align: center;">{{ $item->description }}</td>
                        <td style="text-align: center;">{{ $item->button }}</td>
                        <td style="text-align: center;"><img src='{{ asset("images/". $item->picture) }}' width='100px' height='100px' alt='' class='img-fluid'></td>
                        <td style="text-align: center;"> 
                            <div class='d-flex justify-content-center'>
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;" href='{{ route('banners.edit', $item->id) }}' banner='button'>Edit</a>
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;" href='{{ route('banners.show', $item->id) }}' banner='button'>Read</a>
                                
                            <form action="{{ route('banners.destroy', $item->id) }}" method="POST">
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
