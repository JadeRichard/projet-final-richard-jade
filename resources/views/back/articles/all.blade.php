@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')


    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Articles</h1>
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

        <a href="{{ route('articles.create') }}" class="btn btncus mb-5"
            style="background-color: #A12C2F; color: white;">Create</a>

        <h2>Published articles</h2>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' style="text-align: center;">#</th>
                    <th scope='col' style="text-align: center;">Picture</th>
                    <th scope='col' style="text-align: center;">Title</th>
                    <th scope='col' style="text-align: center;">Description 1</th>
                    <th scope='col' style="text-align: center;">Description 2</th>
                    <th scope='col' style="text-align: center;">Date</th>
                    <th scope='col' style="text-align: center;">Categories</th>
                    <th scope='col' style="text-align: center;">Tags</th>
                    <th scope='col' style="text-align: center;">Author</th>
                    @if (auth()->user()->id == 1)
                    <th scope='col' style="text-align: center;">Is published</th>
                    @endif
                    <th scope='col' style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $item)
                    @if ( $item->is_published == 1)
                        <tr>
                            <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                            <td style="text-align: center;"><img src='{{ asset('images/' . $item->picture) }}' width='100px'
                                    height='100px' alt='' class='img-fluid'></td>
                            <td style="text-align: center;">{{ $item->title }}</td>
                            <td style="text-align: center;">{{ $item->description_1 }}</td>
                            <td style="text-align: center;">{{ $item->description_2 }}</td>
                            <td style="text-align: center;">{{ $item->date }}</td>
                            <td style="text-align: center;">
                                @foreach ($item->categories as $categories)
                                    {{ $categories->name }},
                                @endforeach
                            </td>
                            <td style="text-align: center;">
                                @foreach ($item->tags as $tags)
                                    <button class="badge rounded-pill bg-danger"
                                        style="border: 1px solid white;">{{ $tags->name }}</button>
                                @endforeach
                            </td>
                            <td style="text-align: center;">{{ $item->user->name }}</td>

                            @if (auth()->user()->id == 1)
                                <td style="text-align: center;">{{ $item->is_published }}</td>
                            @endif

                            <td style="text-align: center;">
                                <div class='d-flex justify-content-center'>
                                    @can('update', $item)
                                        <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                            href='{{ route('articles.edit', $item->id) }}' article='button'>Edit</a>
                                    @endcan
                                    <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                        href='{{ route('articles.show', $item->id) }}' article='button'>Read</a>

                                    @can('delete', $item)
                                        <form action="{{ route('articles.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btncus2 mx-2"
                                                style="background-color: #A12C2F; color: white;">Delete</button>
                                        </form>
                                    @endcan

                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <h2>Non-published articles</h2>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' style="text-align: center;">#</th>
                    <th scope='col' style="text-align: center;">Picture</th>
                    <th scope='col' style="text-align: center;">Title</th>
                    <th scope='col' style="text-align: center;">Description 1</th>
                    <th scope='col' style="text-align: center;">Description 2</th>
                    <th scope='col' style="text-align: center;">Date</th>
                    <th scope='col' style="text-align: center;">Categories</th>
                    <th scope='col' style="text-align: center;">Tags</th>
                    <th scope='col' style="text-align: center;">Author</th>
                    @if (auth()->user()->id == 1)
                    <th scope='col' style="text-align: center;">Is published</th>
                    <th scope='col' style="text-align: center;">Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $item)
                    @if ($item->is_published == 0)
                        <tr>
                            <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                            <td style="text-align: center;"><img src='{{ asset('images/' . $item->picture) }}' width='100px'
                                    height='100px' alt='' class='img-fluid'></td>
                            <td style="text-align: center;">{{ $item->title }}</td>
                            <td style="text-align: center;">{{ $item->description_1 }}</td>
                            <td style="text-align: center;">{{ $item->description_2 }}</td>
                            <td style="text-align: center;">{{ $item->date }}</td>
                            <td style="text-align: center;">
                                @foreach ($item->categories as $categories)
                                    {{ $categories->name }},
                                @endforeach
                            </td>
                            <td style="text-align: center;">
                                @foreach ($item->tags as $tags)
                                    <button class="badge rounded-pill bg-danger"
                                        style="border: 1px solid white;">{{ $tags->name }}</button>
                                @endforeach
                            </td>
                            <td style="text-align: center;">{{ $item->user->name }}</td>

                            @if (auth()->user()->id == 1)
                                <td style="text-align: center;">{{ $item->is_published }}</td>
                            

                            <td style="text-align: center;">
                                <div class='d-flex justify-content-center'>
                                    @can('update', $item)
                                        <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                            href='{{ route('articles.edit', $item->id) }}' article='button'>Edit</a>
                                    @endcan
                                    <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                        href='{{ route('articles.show', $item->id) }}' article='button'>Read</a>

                                    @can('delete', $item)
                                        <form action="{{ route('articles.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btncus2 mx-2"
                                                style="background-color: #A12C2F; color: white;">Delete</button>
                                        </form>
                                    @endcan

                                </div>
                            </td>
                            @endif
                        </tr>
                    @endif
                @endforeach

            </tbody>
        </table>


    </div>
@endsection
