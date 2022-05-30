@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1>Comments</h1>
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
                    <th scope='col' style="text-align: center;">#</th>
                    <th scope='col' style="text-align: center;">Article</th>
                    <th scope='col' style="text-align: center;">Author</th>
                    <th scope='col' style="text-align: center;">Email</th>
                    <th scope='col' style="text-align: center;">Content</th>
                    <th scope='col' style="text-align: center;">Time</th>
                    <th scope='col' style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>
                        <form action='{{ route('comments.store') }}' method='post' enctype="multipart/form-data">
                            @csrf

                    <td style="text-align: center;"> <input type="text" name="article_id" value=""></td>
                    <td style="text-align: center;"> <input type="text" name="user_id" value=""></td>
                    <td style="text-align: center;"> <input type="text" name="email"
                            value="{{ old('email') }}"></td>
                    <td style="text-align: center;"> <input type="text" name="content"
                            value="{{ old('content') }}"></td>
                    <td style="text-align: center;"> <input type="text" name="time" value="{{ old('time') }}"></td>

                    <td style="text-align: center;"><button class="btn btncus2" type='submit'
                            style="background-color: #A12C2F; color: white;">Create</button> </td>
                    </form>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
