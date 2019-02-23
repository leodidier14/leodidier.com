@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/contact.css') }}">  

<div class="container">
    <div class="row">

    <div class="competencesp col-12 col-md-6 col-lg-6">
    <div class="container contactbtn">
        <div class="contact-method">
            <i class="fas fa-envelope"></i>
            <span><a href="mailto:leo.didier@viacesi.fr">leo.didier@viacesi.fr</a></span>
        </div>
        <div class="contact-method">
            <i class="fas fa-phone"></i>
            <span>0767062341</span>
        </div>
        <div class="contact-method">
            <i class="fas fa-map-marker-alt"></i>
            <span>Adresse</span>
        </div>  
  </div>   
  </div>   
  
  <div class="competencesp col-12 col-md-6 col-lg-6">
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
    </div>  
    
</div> 
    </div> 
@endsection  