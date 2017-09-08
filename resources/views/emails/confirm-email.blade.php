@component('mail::message')
# One Last Step

We just need you to confirm your email address

@component('mail::button', ['url' => url(route('register.confirm', ['token' => $user->confirmation_token]))])
Confirm Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
