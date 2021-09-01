@component('mail::message')
# Hello Admin

Got new unsubscribe as bellow:

<table cellspacing="0" cellpadding="25" border="1" width="500px" >
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);" width="30%" >
            <strong>Name</strong> 
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);" width="70%" >
            {{ $input['name'] }}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>Email</strong> 
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            {{ $input['email'] }}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>Message</strong>
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            {{ $input['message'] }}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>IP</strong>
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            {{ $input['ip'] }}
        </td>
    </tr>
</table>
  
<br><br><br>
Thanks,<br> 
{{ config('app.name') }}
@endcomponent
