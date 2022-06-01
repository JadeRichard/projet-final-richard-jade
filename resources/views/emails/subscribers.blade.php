@component('mail::message')
{{ $email }}, 

Merci de vous être inscrit à notre Newsletter.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

