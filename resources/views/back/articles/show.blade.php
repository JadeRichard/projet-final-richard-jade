@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Articles</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Picture</th>
                    <th scope='col'style="text-align: center;">Title</th>
                    <th scope='col'style="text-align: center;">Description 1</th>
                    <th scope='col'style="text-align: center;">Description 2</th>
                    <th scope='col'style="text-align: center;">Date</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $articles->id }}</th>
                    <td style="text-align: center;"><img src='{{ asset("images/". $articles->picture) }}' width='100px' height='100px' alt='' class='img-fluid'></td>
                    <td style="text-align: center;">{{ $articles->title }}</td>
                    <td style="text-align: center;">{{ $articles->description_1 }}</td>
                    <td style="text-align: center;">{{ $articles->description_2 }}</td>
                    <td style="text-align: center;">{{ $articles->date }}</td>
                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('articles.index') }}"  style="background-color: #A12C2F; color: white;">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
