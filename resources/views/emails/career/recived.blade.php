@component('mail::message')

# Hello {{$career->name}}, 


This email is to let you know that we have received your application. We appreciate your interest in Citrusbug Technolabs. 

We are reviewing the applications currently. If you are selected for the interview, you can expect an email for us shortly.
 

Thank you for your application, and have a nice day.
{{ config('app.name') }}   
@endcomponent 
 