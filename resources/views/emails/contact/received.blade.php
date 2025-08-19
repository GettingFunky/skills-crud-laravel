<!-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> -->


@component('mail::message')
# Νέο μήνυμα από φόρμα επικοινωνίας

Όνομα: {{ $contactMessage->name }}

Email: {{ $contactMessage->email }}

Μήνυμα:
{{ $contactMessage->message }}

@endcomponent