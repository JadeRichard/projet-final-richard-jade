@extends('back.layouts.app')

@section('content')
    @include('back.partials.navbar')

    <div style="width: 60%; margin: auto; border: 1px solid rgba(0, 0, 0, 0.171); border-radius: 10px; padding: 50px; margin-top: 100px;">
        <h1>Your profile</h1>


        <div class="d-flex flex-column">

            <h4>Your profile picture :</h4><img src="{{ asset('images/' . auth()->user()->picture) }}" alt="" style="width: 200px">

            <h4>Your name :</h4><p>{{ auth()->user()->name }}</p>
            <h4>Your email :</h4><p>{{ auth()->user()->email }}</p>
            <h4>Your password :</h4><p>{{ auth()->user()->password }}</p>
            
            <a class='btn btncus3 mx-2 mt-3' style="background-color: #A12C2F; color: white; border-radius: 10px;"
                                    href='{{ route('users.edit', auth()->user()->id) }}' article='button'>Edit</a>
        </div>



    </div>
@endsection
