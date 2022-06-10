{{-- @component('mail::message')
{{ $email->email }}, 

Thank you for your subscription to our Newsletter ! 

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}


<div style="background-color: rgb(219, 219, 219); height: 100vh; display: flex; justify-content: center; align-items: center;">

    <div style="width: 80%; height: 50vh; background-color: white; padding: 30px;">
        Hello,<br><br>

        Thank you for your subscription to our Newsletter with your email address, <span style="color:rgb(216, 136, 111)">{{ $email->email }}</span>!<br><br>

        You will receive updates on our latest courses, books, and events.<br><br>

        Thanks, Educa. <br><br>
    </div>

</div>
