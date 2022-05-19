@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1>Articles</h1>
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
                    <th scope='row'  style="text-align: center;">{{ $articles->id }}</th>
                    <form action='{{ route('articles.update', $articles->id) }}' method='post' enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <td style="text-align: center;"> <input type="file" name="picture" value="{{ $articles->picture }}"></td>
                        <td style="text-align: center;"> <input type="text" name="title" value="{{ $articles->title }}"></td>
                        <td style="text-align: center;"> <input type="text" name="description_1" value="{{ $articles->description_1 }}"></td>
                        <td style="text-align: center;"> <input type="text" name="description_2" value="{{ $articles->description_2 }}"></td>
                        <td style="text-align: center;"> <input type="text" name="date" value="{{ $articles->date }}"></td>
                        <td style="text-align: center;"><button class="btn btncus2" type='submit'
                                style="background-color: #A12C2F; color: white;">Update</button></td>
                    </form>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
