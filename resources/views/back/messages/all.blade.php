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
                    <th scope='col' style="text-align: center;">Recipient </th>
                    <th scope='col' style="text-align: center;">Name</th>
                    <th scope='col' style="text-align: center;">Email</th>
                    <th scope='col' style="text-align: center;">Message</th>
                    <th scope='col' style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>

                @if (auth()->user()->id == 1)

                @foreach ($messages as $item)
                    <tr>
                        <td style="text-align: center;">{{ $item->to }}</td>
                        <td style="text-align: center;">{{ $item->name }}</td>
                        <td style="text-align: center;">{{ $item->email }}</td>
                        <td style="text-align: center;">{{ $item->message }}</td>

                        <td style="text-align: center;">
                            <div class='d-flex justify-content-center'>
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
            
                @foreach ($messages->where("to", "=", auth()->user()->name) as $item)
                    <tr>
                        <td style="text-align: center;">{{ $item->to }}</td>
                        {{-- <td style="text-align: center;">{{ $item->teacher->name }}</td> --}}
                        <td style="text-align: center;">{{ $item->name }}</td>
                        <td style="text-align: center;">{{ $item->email }}</td>
                        <td style="text-align: center;">{{ $item->message }}</td>


                        <td style="text-align: center;">
                            <div class='d-flex justify-content-center'>
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
                @endif
            </tbody>
        </table>

    </div>
@endsection
