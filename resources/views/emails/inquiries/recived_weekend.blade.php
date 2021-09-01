@component('mail::message')
 
# Hello {{$inquiry->name}}, 
 

Thank you for contacting us. We are off for the weekend and will get back to you earliest on Monday.

If anything urgent, you can call us at <a href="http://tel:+12176507898">+1 217 650 7898</a>.

 
Have a great weekend!<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
