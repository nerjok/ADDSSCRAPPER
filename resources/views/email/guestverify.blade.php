@component('mail::message')
Hi, there

You have'git this email becouse someone has subscribed adds at our;s site, please ignore, if that weren't you.

<h1>Click the Link To Verify Your Email</h1>
Click the following link to verify your email <a href="{{url('/verife/'.$email_token)}}">Confirmation link</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
