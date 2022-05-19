@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')


    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Pictures</h1>
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
        
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Title</th>
                    <th scope='col'style="text-align: center;">Picture</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pictures as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->title }}</td>
                        <td style="text-align: center;"><img src='{{ asset("images/". $item->picture) }}' width='100px' height='100px' alt='' class='img-fluid'></td>
                        <td style="text-align: center;"> 
                            <div class='d-flex justify-content-center'>
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;" href='{{ route('pictures.edit', $item->id) }}' picture='button'>Edit</a>
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;" href='{{ route('pictures.show', $item->id) }}' picture='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
