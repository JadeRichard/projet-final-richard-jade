@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1>Services</h1>
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
                    <th scope='col'style="text-align: center;">Title</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Icon</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>
                        <form action='{{ route('services.store') }}' method='post' enctype="multipart/form-data">
                            @csrf

                            <td style="text-align: center;"> <input type="text" name="title" value="{{ old('title') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="description" value="{{ old('description') }}"></td>
                            <td style="text-align: center;">
                                <div class="d-flex flex-column">
                                    <input type="radio" id="icon" name="icon" value='<i class="fa fa-graduation-cap"></i>'>
                                    <label for="icon"><i class="fa fa-graduation-cap"></i></label>
        
        
                                    <input type="radio" id="huey" name="icon" value='<i class="fa fa-globe"></i>'>
                                    <label for="icon"><i class="fa fa-globe"></i></label>
        
        
                                    <input type="radio" id="huey" name="icon" value='<i class="fa fa-clock-o"></i>'>
                                    <label for="icon"><i class="fa fa-clock-o"></i></label>
        
        
                                    <input type="radio" id="huey" name="icon" value='<i class="fa fa-book"></i>'>
                                    <label for="icon"><i class="fa fa-book"></i></label>

                                    <input type="radio" id="huey" name="icon" value='<i class="fa fa-random"></i>'>
                                    <label for="icon"><i class="fa fa-random"></i></label>
        
        
                                    <input type="radio" id="huey" name="icon" value='<i class="fa fa-undo"></i>'>
                                    <label for="icon"><i class="fa fa-undo"></i></label>
        
        
                                    <input type="radio" id="huey" name="icon" value='<i class="fa fa-unlock"></i>'>
                                    <label for="icon"><i class="fa fa-unlock"></i></label>
        
        
                                    <input type="radio" id="huey" name="icon" value='<i class="fa fa-tablet"></i>'>
                                    <label for="icon"><i class="fa fa-tablet"></i></label>
        
                                </div>
                            </td>
                            <td style="text-align: center;"><button class="btn btncus2" type='submit'
                                style="background-color: #A12C2F; color: white;">Create</button> </td>
                    </form>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
