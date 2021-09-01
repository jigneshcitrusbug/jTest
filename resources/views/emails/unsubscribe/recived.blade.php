@component('mail::message')

# Hello {{$input['name']}},

You have been successfully unsubscribed from the CITRUSBUG email list. 


Have a great day ahead!<br> 
Thanks,<br> 
{{ config('app.name') }}
@endcomponent
