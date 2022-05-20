@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div style="margin: auto; width: 90%;">
        <h1>Banners</h1>
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
                    <th scope='col'style="text-align: center;">Accent</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Button</th>
                    <th scope='col'style="text-align: center;">Picture</th>
                    <th scope='col'style="text-align: center;">Priority</th>
                    <th scope='col'style="text-align: center;">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'  style="text-align: center;">{{ $banners->id }}</th>
                    <form action='{{ route('banners.update', $banners->id) }}' method='post' enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <td style="text-align: center;"> <input type="text" name="title" value="{{ $banners->title }}"></td>
                        <td style="text-align: center;"> <input type="text" name="accent" value="{{ $banners->accent }}"></td>
                        <td style="text-align: center;"> <input type="text" name="description" value="{{ $banners->description }}"></td>
                        <td style="text-align: center;"> <input type="text" name="button" value="{{ $banners->button }}"></td>
                        <td style="text-align: center;"> <input type="file" name="picture" value="{{ $banners->picture }}"></td>
                        <td style="text-align: center;"> 
                            <div class='form-check'>
                                <input type='checkbox' id='checkbox_yes' class='form-check-input' name='priority'
                                    value='{{ 1 }}'>
                                <label for='checkbox_yes'>Yes</label>
                            </div>
                            <div class='form-check'>
                                <input type='checkbox' id='checkbox_no' class='form-check-input' name='priority'
                                    value='{{ 0 }}'>
                                <label for='checkbox_no'>No</label>
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
