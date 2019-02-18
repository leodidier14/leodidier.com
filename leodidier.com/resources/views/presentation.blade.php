@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/presentation.css') }}">       

<div class="container-fluid">

<div class="row">

<div class="col-12 col-md-6 col-lg-4">
<div class="jumbotron">
  <h1>Léo DIDIER</h1>
  <p id="1"><img id="photo" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/51552747_625468324559635_7348703023574548480_n.jpg?_nc_cat=109&_nc_ht=scontent-cdg2-1.xx&oh=8e7f26f7b5ead44f6c96a1e357ff6e6b&oe=5CF85CB9"></p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4">
<div class="jumbotron">
  <h1>Curiculum</h1>
  <p id="21">It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#2" role="button">>></a>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4">
<div class="jumbotron">
  <h1>Pranked</h1>
  <p id="3">It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#3" role="button">>></a>
</div>
</div>
  
</div>

</div>

<script>

var text= "<p id='5'>Étudiant en deuxième année de cycle préparatoire en école d’ingénieurs en informatique. À la recherche d’un stage en entreprise du mardi 23 avril 2019 au vendredi 28 juin 2019.<p> <a class='btn btn-primary btn-lg' href='#3' role='button'>>></a>"

$( "img" ).click(function() {
  $("#1").slideUp(500, function() {
    $("#1").empty();
    $("#1").slideDown(1000, function() {
  $("#1").replaceWith(text);
})
})
});

var text2 = "<p>test</p>"
$( ".jumbotron" ).click(function() {
  $("#5").slideUp(500, function() {
    $("#5").empty();
    $("#5").slideDown(1000, function() {
  $("#5").replaceWith(text2);
})
})
});

</script>

    <!-- <div class="container-fluid">
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
  </script> -->

    @endsection


