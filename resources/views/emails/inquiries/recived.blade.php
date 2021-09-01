@component('mail::message')

# Hello {{$inquiry->name}},


Thank you for contacting Citrusbug! We will happy to assist you.
We have received your inquiry and will get back to you in couple of hours.  
If anything urgent, you can call us at <a href="http://tel:+12176507898">+1 217 650 7898</a>.
 

Have a great day ahead!<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
