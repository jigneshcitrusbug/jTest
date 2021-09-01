@component('mail::message')
 
# Hello {{$inquiry->name}}, 


Thank you for contacting us. We had left for the day and will get back to you early tomorrow.

If anything urgent, you can call us at <a href="http://tel:+12176507898">+1 217 650 7898</a>.
 

Have a great day ahead!<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
