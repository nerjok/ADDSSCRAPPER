@component('mail::message')
# Introduction

The body of your message.

<h1>Click the Link To Verify Your Email</h1>
Click the following link to verify your email <a href="{{url('/verify/'.$email_token)}}">Confirmation link</a>


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
