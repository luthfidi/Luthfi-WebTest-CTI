@component('mail::message')
# Welcome to Sangfor Cyber Command Trial

Dear {{ $trial->first_name }},

Thank you for your interest in Sangfor Cyber Command. Our team will contact you within 5 working days to get you started with your free trial.

Your submitted details:
- Company: {{ $trial->company_name }}
- Industry: {{ $trial->industry }}
- Job Title: {{ $trial->job_title }}

@component('mail::button', ['url' => config('app.url')])
Visit Our Website
@endcomponent

Best regards,<br>
{{ config('app.name') }} Team
@endcomponent