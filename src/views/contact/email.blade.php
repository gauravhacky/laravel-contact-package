@component('mail::message')
# Introduction

There is a new query from <br>

Email :   {{$email}} <br>
Message : {{$message}}

@component('mail::button', ['url' => '8bityard.com'])
Visit for more
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
