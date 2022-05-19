@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Pictures</h1>
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
                <tr>
                    <th scope='row'>{{ $pictures->id }}</th>
                    <td style="text-align: center;">{{ $pictures->title }}</td>
                    <td style="text-align: center;"><img src='{{ asset("images/". $pictures->picture) }}' width='100px' height='100px' alt='' class='img-fluid'></td>
                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('pictures.index') }}"  style="background-color: #A12C2F; color: white;">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
