@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/contact.css') }}">  

<div class="contact-section">
    <h1>Me contacter</h1>
    <div class="border"></div>
    <form class="contact-form" action="index.html" method="post">
        <input type="text" class="contact-form-text" placeholder="Nom">
        <input type="email" class="contact-form-text" placeholder="Email">
        <input type="text" class="contact-form-text" placeholder="Phone">
        <textarea class="contact-form-text" placeholder="Message"></textarea>
        <input type="submit" class="contact-form-btn" value="Envoyer">
    </form>
</div>

@endsection  