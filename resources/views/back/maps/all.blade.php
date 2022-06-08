@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')


    <div style="margin: auto; width: 90%;">
        <h1 class='my-5'>Maps</h1>
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
                    <th scope='col' style="text-align: center;">#</th>
                    <th scope='col' style="text-align: center;">Location</th>
                    <th scope='col' style="text-align: center;">Map</th>
                    <th scope='col' style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($maps as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->location }}</td>
                        <td style="text-align: center;">
                            <iframe width="450" height="340" id="gmap_canvas"
                            src="https://maps.google.com/maps?q={{ $item->location }}&t=h&z=21&ie=UTF8&iwloc=&output=embed&iwloc=B"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </td>

                        <td style="text-align: center;">
                            <div class='d-flex justify-content-center'>

                                <form action='{{ route('map.edit', $item->id) }}' method="POST">
                                    @csrf
                                    @method("POST")
                                    <button class="btn btncus2 mx-2" style="background-color: #A12C2F; color: white;" >Edit</button>
                                </form>

                                {{-- <a class='btn btncus3 mx-2' style="background-color: #A12C2F; color: white;" href='{{ route('map.update', $item->id) }}' event='button'>Edit</a> --}}

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection
