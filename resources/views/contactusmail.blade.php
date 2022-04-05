@component('mail::message')

@if($type == 'user')
#Hello {{$name}},

Your mail has been delivered successfully, you will get a reply as soon as possible.


@else

#Hi Admin,

You have a new mail from {{$name}}
<br>
<b>Subject</b>: {{$msg_subject}}<br>
<b>Phone Number</b>: {{$phone_no}}<br>
<b>Email Address</b>: {{$email}}<br><br/>
<b>Message</b>: {{$msg}}


@endif

<br/>
Best Regards,<br>
Timothy from Isleridge. 
@endcomponent
