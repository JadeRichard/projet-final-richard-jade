@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')


    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Messages</h1>
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
                    <th scope='col' style="text-align: center;">Teacher</th>
                    <th scope='col' style="text-align: center;">Course</th>
                    <th scope='col' style="text-align: center;">Request</th>
                    <th scope='col' style="text-align: center;">Name</th>
                    <th scope='col' style="text-align: center;">Email</th>
                    <th scope='col' style="text-align: center;">Date</th>
                    <th scope='col' style="text-align: center;">Time</th>
                    <th scope='col' style="text-align: center;">Is validated</th>
                    <th scope='col' style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>

                @if (auth()->user()->id == 1)

                @foreach ($messages as $item)
                    <tr>
                        <td style="text-align: center;">{{ $item->teacher }}</td>
                        <td style="text-align: center;">{{ $item->course }}</td>
                        <td style="text-align: center;">{{ $item->request }}</td>
                        <td style="text-align: center;">{{ $item->name }}</td>
                        <td style="text-align: center;">{{ $item->email }}</td>
                        <td style="text-align: center;">{{ $item->date }}</td>
                        <td style="text-align: center;">{{ $item->time }}</td>

                        @if ($item->is_validated == 1)
                        <td style="text-align: center;"><button class="badge rounded-pill bg-success"
                            style="border: 1px solid white;">Yes</button></td>
                        @else
                        <td style="text-align: center;"><button class="badge rounded-pill bg-danger"
                            style="border: 1px solid white;">No</button></td>
                        @endif

                        <td style="text-align: center;">
                            <div class='d-flex justify-content-center'>

                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                    href='{{ route('messages.edit', $item->id) }}' message='button'>Edit</a>
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                    href='{{ route('messages.show', $item->id) }}' message='button'>Read</a>

                                <form action="{{ route('messages.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btncus2 mx-2"
                                        style="background-color: #A12C2F; color: white;">Delete</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
                    
                @elseif (auth()->user()->roles()->first()->name == "teacher")
            
                @foreach ($messages->where("teacher", "=", auth()->user()->name) as $item)
                    <tr>
                        <td style="text-align: center;">{{ $item->teacher }}</td>
                        <td style="text-align: center;">{{ $item->course }}</td>
                        <td style="text-align: center;">{{ $item->request }}</td>
                        <td style="text-align: center;">{{ $item->name }}</td>
                        <td style="text-align: center;">{{ $item->email }}</td>
                        <td style="text-align: center;">{{ $item->date }}</td>
                        <td style="text-align: center;">{{ $item->time }}</td>

                        @if ($item->is_validated == 1)
                        <td style="text-align: center;"><button class="badge rounded-pill bg-success"
                            style="border: 1px solid white;">Yes</button></td>
                        @else
                        <td style="text-align: center;"><button class="badge rounded-pill bg-danger"
                            style="border: 1px solid white;">No</button></td>
                        @endif

                        <td style="text-align: center;">
                            <div class='d-flex justify-content-center'>

                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                    href='{{ route('messages.edit', $item->id) }}' message='button'>Edit</a>
                                <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                    href='{{ route('messages.show', $item->id) }}' message='button'>Read</a>

                                <form action="{{ route('messages.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btncus2 mx-2"
                                        style="background-color: #A12C2F; color: white;">Delete</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
                @else
                @foreach ($messages->where("name", "=", auth()->user()->name) as $item)
                <tr>
                    <td style="text-align: center;">{{ $item->teacher }}</td>
                    <td style="text-align: center;">{{ $item->course }}</td>
                    <td style="text-align: center;">{{ $item->request }}</td>
                    <td style="text-align: center;">{{ $item->name }}</td>
                    <td style="text-align: center;">{{ $item->email }}</td>
                    <td style="text-align: center;">{{ $item->date }}</td>
                    <td style="text-align: center;">{{ $item->time }}</td>

                    @if ($item->is_validated == 1)
                    <td style="text-align: center;"><button class="badge rounded-pill bg-success"
                        style="border: 1px solid white;">Yes</button></td>
                    @else
                    <td style="text-align: center;"><button class="badge rounded-pill bg-danger"
                        style="border: 1px solid white;">No</button></td>
                    @endif

                    <td style="text-align: center;">
                        <div class='d-flex justify-content-center'>
                            @can('update', $item)
                            <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                href='{{ route('messages.edit', $item->id) }}' message='button'>Edit</a>
                            @endcan
                            <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;"
                                href='{{ route('messages.show', $item->id) }}' message='button'>Read</a>
                            @can('delete', $item)
                            <form action="{{ route('messages.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btncus2 mx-2"
                                    style="background-color: #A12C2F; color: white;">Delete</button>
                            </form>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
                @endif
            </tbody>
        </table>

    </div>
@endsection
