@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1>Users</h1>
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
                    <th scope='col' style="text-align: center;">Name</th>
                    <th scope='col' style="text-align: center;">Email</th>
                    <th scope='col' style="text-align: center;">Password</th>
                    <th scope='col' style="text-align: center;">Role</th>
                    <th scope='col' style="text-align: center;">Picture</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $users->id }}</th>

                    <form action='{{ route('users.update', $users->id) }}' method='post' enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                        <td style="text-align: center;"> <input type="text" name="name" value="{{ $users->name }}"></td>
                        <td style="text-align: center;"> <input type="text" name="email" value="{{ $users->email }}"></td>
                        <td style="text-align: center;"> <input type="text" name="password"
                                value="{{ $users->password }}"></td>
                        <td style="text-align: center;">
                            @foreach ($roles as $role)
                                <div class='form-check'>
                                    <input type='checkbox' id='checkbox{{ $role->id }}' class='form-check-input'
                                        name='roles[]' value='{{ $role->id }}'
                                        @if ($users->roles->contains($role)) checked @endif>
                                    <label for='checkbox{{ $role->id }}'>{{ $role->name }}</label>
                                </div>
                            @endforeach
                        </td>
                        <td style="text-align: center;"> <input type="file" name="picture" value="{{ $users->picture }}"></td>
                        <td style="text-align: center;"><button class="btn btncus2" type='submit'
                                style="background-color: #A12C2F; color: white;">Update</button> {{-- update_blade_anchor --}}</td>
                    </form>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
