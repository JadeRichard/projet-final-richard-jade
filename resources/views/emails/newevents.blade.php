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

        A new event has been created ! It's called and is set to begin on the <br><br>

        Thanks, Educa. <br><br>
    </div>

</div>
