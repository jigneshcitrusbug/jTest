@component('mail::message')
# Hello Admin

Got new job inquiry as bellow:
 
<table cellspacing="0" cellpadding="25" border="1" width="500px" >
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);" width="30%" >
            <strong>Name</strong> 
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);" width="70%" >
            {{ @$career->name }}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>Email</strong> 
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            {{ @$career->email }}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>Phone</strong> 
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            {{ @$career->phone }}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>Message</strong>
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            {{ @$career->message }}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid rgb(0, 0, 0);">
            <strong>CV</strong>
        </td>
        <td style="border: 1px solid rgb(0, 0, 0);">
            Download: {{ asset($career->resume)  ?? '' }}
        </td>
    </tr>
</table>

<br><br><br>
 
Thanks,<br> 
{{ config('app.name') }}
@endcomponent
