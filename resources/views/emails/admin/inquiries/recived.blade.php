@component('mail::message')
# Hello Admin

Got new inquiry as bellow:

<table cellspacing="0" cellpadding="25" border="1" width="500px" >
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);" width="30%" >
            <strong>Name</strong> 
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);" width="70%" >
            {{ $inquiry->name }}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>Email</strong> 
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            {{ $inquiry->email }}
        </td>
    </tr>
	@if($inquiry->phone)
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>Phone</strong> 
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
			<?php $cont = \App\Country::where("id",$inquiry->country_code)->first(); ?>
            @if($cont) {{$cont->phonecode}} @else {{ $inquiry->country_code }} @endif  {{ $inquiry->phone }}
        </td>
    </tr>
	@endif
	@if($inquiry->company)
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>Company</strong>
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            {{ $inquiry->company }}
        </td>
    </tr>
	@endif
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>Message</strong>
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            {{ $inquiry->message }}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>Files</strong>
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <ul><li> Documents: </li> @if($files)@foreach ($files as $item)<li>Download:   {{ $item}}</li>    @endforeach @endif </ul>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>IP</strong>
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            {{ $inquiry->ip }}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>Web Page</strong>
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            {{ $inquiry->page }}
        </td>
    </tr>
	@if(isset($request) && isset($request['page']))
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);" width="30%" >
            <strong>Form-ID</strong> 
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);" width="70%" >
            {{ $request['page'] }}
        </td>
    </tr>
	@endif
</table>
 
Thanks,<br> 
{{ config('app.name') }}
@endcomponent
