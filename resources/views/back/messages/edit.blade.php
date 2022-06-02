@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1>Messages</h1>
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
                <tr>
                    <th scope='row' style="text-align: center;">{{ $messages->id }}</th>
                    <form action='{{ route('messages.update', $messages->id) }}' method='post' enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <td style="text-align: center;">{{ $messages->teacher }}</td>
                        <td style="text-align: center;">{{ $messages->course }}</td>
                        <td style="text-align: center;">{{ $messages->request }}</td>
                        <td style="text-align: center;">{{ $messages->name }}</td>
                        <td style="text-align: center;">{{ $messages->email }}</td>
                        <td style="text-align: center;"> <input type="date" name="date"
                                value="2022-05-28" min="2022-05-28" max="2022-12-31"></td>
                        <td style="text-align: center;"> <input type="time" name="time" min="09:00" max="18:00">
                        </td>

                        <td style="text-align: center;">
                            <div class='form-check'>
                                <input type='checkbox' id='checkboxis_validated' class='form-check-input'
                                    name='is_validated' value='1'>
                                <label style="padding-left: 15px" for='checkboxis_validated'>Yes</label>
                            </div>

                            <div class='form-check'>
                                <input type='checkbox' id='checkboxis_validated' class='form-check-input'
                                    name='is_validated' value='0'>
                                <label style="padding-left: 15px" for='checkboxis_validated'>No</label>
                            </div>
                        </td>

                        <td style="text-align: center;"><button class="btn btncus2" type='submit'
                                style="background-color: #A12C2F; color: white;">Update</button></td>
                    </form>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
