@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1>Teachers</h1>
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
                    <th scope='col'style="text-align: center;">Name</th>
                    <th scope='col'style="text-align: center;">Email</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Picture</th>
                    <th scope='col'style="text-align: center;">Telephone</th>
                    <th scope='col'style="text-align: center;">Skype</th>
                    <th scope='col'style="text-align: center;">Role</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>
                        <form action='{{ route('teachers.store') }}' method='post' enctype="multipart/form-data">
                            @csrf

                            <td style="text-align: center;"> <input type="text" name="name" value="{{ old('name') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="email" value="{{ old('email') }}"></td> 
                            <td style="text-align: center;"> <input type="text" name="description" value="{{ old('description') }}"></td> 
                            <td style="text-align: center;"> <input type="file" name="picture" value=""></td>
                            <td style="text-align: center;"> <input type="text" name="telephone" value="{{ old('telephone') }}"></td> 
                            <td style="text-align: center;"> <input type="text" name="skype" value="{{ old('skype') }}"></td> 
                            <td style="text-align: center;"> <input type="text" name="role" value="{{ old('role') }}"></td> 
                            <td style="text-align: center;"><button class="btn btncus2" type='submit'
                                style="background-color: #A12C2F; color: white;">Create</button> </td>
                    </form>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
