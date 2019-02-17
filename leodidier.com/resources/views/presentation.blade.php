@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/presentation.css') }}">       

    <div class="container">
  <div class="row contenu">
  <div class="col-md-4 un">
      <img id="photo" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/51552747_625468324559635_7348703023574548480_n.jpg?_nc_cat=109&_nc_ht=scontent-cdg2-1.xx&oh=8e7f26f7b5ead44f6c96a1e357ff6e6b&oe=5CF85CB9">
    <h1>Léo DIDIER<h1>
    19 ans
    </div>
    <div class="col-md-4 deux">
    <p>Étudiant en deuxième année de cycle préparatoire en école d’ingénieurs en informatique.
À la recherche d’un stage en entreprise du mardi 23 avril 2019 au vendredi 28 juin 2019.</p>
    </div>
    <div class="col-md-4 trois">
      <h3>*Diplomes et formations</h3>
      <h3>*Expériences professionnelles</h3>
      <h3>*Compétences</h3>
    </div>
  </div>
  
</div>
<div class="pagination" >
  <a href="/">&laquo;</a>
  <a href="#">Qui suis-je ? </a>
  <a href="#" class="active">C.V</a>
  <a href="#">&raquo;</a>
</div>
<script>

$(document).ready(function(){
    $(".pagination a").click(function(){
        page=($(this).attr("href"));
        $.ajax( {
          url : page,
          success: function (html) {
            afficher(html);
          },
          error:function(XMLHttpRequest, textStatus,errorThrown) {
            altert(textStatus);
          }
        })
        return false;
    }); 
});

function afficher(data) {
  $(".container").fadeOut(500, function() {
    $(".container").empty();
  $(".container").html(data);
  $(".container").fadeIn(1000);
  })

}
  </script>

    @endsection


