@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Banners</h1>
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
                <tr>
                    <th scope='row'>{{ $banners->id }}</th>
                    <td style="text-align: center;">{{ $banners->title }}</td>
                    <td style="text-align: center;">{{ $banners->accent }}</td>
                    <td style="text-align: center;">{{ $banners->description }}</td>
                    <td style="text-align: center;">{{ $banners->button }}</td>
                    <td style="text-align: center;"><img src='{{ asset("images/". $banners->picture) }}' width='100px' height='100px' alt='' class='img-fluid'></td>
                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('banners.index') }}"  style="background-color: #A12C2F; color: white;">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
