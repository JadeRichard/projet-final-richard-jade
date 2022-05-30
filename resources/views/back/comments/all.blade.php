@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')


    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Comments</h1>
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

        <a href="{{ route('comments.create') }}" class="btn btncus mb-5"
            style="background-color: #A12C2F; color: white;">Create</a>

        <h2>Published comments</h2>

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
                @foreach ($comments as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->article_id }}</td>
                        <td style="text-align: center;">{{ $item->name }}</td>
                        <td style="text-align: center;">{{ $item->email }}</td>
                        <td style="text-align: center;">{{ $item->content }}</td>

                        <td style="text-align: center;">{{ $item->time }}</td>


                        <td style="text-align: center;">
                            <div class='d-flex justify-content-center'>

                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                    href='{{ route('comments.edit', $item->id) }}' comment='button'>Edit</a>

                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                    href='{{ route('comments.show', $item->id) }}' comment='button'>Read</a>


                                <form action="{{ route('comments.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btncus2 mx-2"
                                        style="background-color: #A12C2F; color: white;">Delete</button>
                                </form>


                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection
