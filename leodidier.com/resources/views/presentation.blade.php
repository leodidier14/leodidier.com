@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/presentation.css') }}">       

<!-- <nav class="navbar navbar-expand-lg navbar-dark primary-color">


  <a class="navbar-brand" href="#">Léo DIDIER</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="basicExampleNav">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil 
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Présentation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pranked</a>
      </li>*/
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav> -->

<!-- <div class="container-fluid">

<div class="row">

<div class="col-12 col-md-12 col-lg-6">
<div class="jumbotron">
  <p id="1"><img id="photo" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/51552747_625468324559635_7348703023574548480_n.jpg?_nc_cat=109&_nc_ht=scontent-cdg2-1.xx&oh=8e7f26f7b5ead44f6c96a1e357ff6e6b&oe=5CF85CB9"></p>
</div>
</div>

<div class="col-12 col-md-12 col-lg-6">
<div class="jumbotron">
  <p id="1"></p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-6">
<div class="jumbotron">
  <h1>Curiculum</h1>
  <p id="21">It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#2" role="button">>></a>
</div>
</div>

<div class="col-12 col-md-6 col-lg-6">
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

</script> -->

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

<!-- 
  <div class="container-fluid">
  
  <div class="row">
    <div class="situation col-12 col-md-12 col-lg-8"> 
      <h2>Situation professionnelle</h2>
      <p>Étudiant en deuxième année de cycle préparatoire en école d’ingénieurs en informatique.
        À la recherche d’un stage en entreprise du mardi 23 avril 2019 au vendredi 28 juin 2019.
      </p>
     </div>
     
     <div class="situationp col-12 col-md-12 col-lg-4"> 
       <img src="https://data.pixiz.com/output/user/frame/preview/400x400/7/9/9/3/3253997_46826.jpg" alt="Smiley face" height="42" width="42">
      </div>
    </div>
    </div>
    
    <div class="row">
      <div class="competencesp col-12 col-md-12 col-lg-4">
        <h2>Compétences</h2>
        <img src="https://data.pixiz.com/output/user/frame/preview/400x400/7/9/9/3/3253997_46826.jpg" alt="Smiley face" height="42" width="42">
      </div>
      <div class="competences col-12 col-md-12 col-lg-8">
        <h3>Langages informatiques</h3>
        <p>
        C, Java, HTML, CSS, PHP (Laravel), JS (Node.js), Bash
        </p>
        <h3>Logiciels</h3>
        <p>
        Pack Office, , MS Project, Photoshop, Illustrator, MySQL, Packet Tracer, VMware, VirtualBox
        </p>
        <h3>Gestion de projet</h3>
        <p>
        REX, PRA, GANTT, PERT, WBS
        </p>
        <h3>Réseau</h3>
        <p>
        Création et gestion d'un réseau 
        -Certification CCNA1/CCNA2
        </p>
      </div>
    </div>
    
    <div class="row">
    <div class="experiences col-12 col-md-12 col-lg-8">
       <h2>Expériences professionnelles</h2>
       <h3>Analyste de support informatique</h3>
       <h4>Mars Wrigley Confectionery</h4>
       <h5>Haguenau</h5>
       <p>
       - Préparation et remplacement de PCs utilisateurs
- Installation de W10 sur des postes situés dans l'usine et dans le bureau
- Accompagnement utilisateurs
- SAV/prise en charge utilisateur après intervention si souci
- Formation des utilisateurs sur des technologies nouvelles à l'entreprise
      </p>
      </div>
      <div class="experiencesp col-12 col-md-12 col-lg-4"> 
        <img src="https://data.pixiz.com/output/user/frame/preview/400x400/7/9/9/3/3253997_46826.jpg" alt="Smiley face" height="42" width="42">
      </div>
    </div>

  <div class="jumbotron">
  <p id="1"><img id="photo" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/51552747_625468324559635_7348703023574548480_n.jpg?_nc_cat=109&_nc_ht=scontent-cdg2-1.xx&oh=8e7f26f7b5ead44f6c96a1e357ff6e6b&oe=5CF85CB9"></p>
</div>
</div>
</div>
</div>
<script>
var text= "<p>Visu pranked</p>"

$( "img" ).click(function() {
  $("#1").slideUp(500, function() {
    $("#1").empty();
    $("#1").slideDown(1000, function() {
  $("#1").replaceWith(text);
})
})
});
</script> -->


<div class="box">
  <img src ="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/51552747_625468324559635_7348703023574548480_n.jpg?_nc_cat=109&_nc_ht=scontent-cdg2-1.xx&oh=8e7f26f7b5ead44f6c96a1e357ff6e6b&oe=5CF85CB9" alt="" class ="box-img">
  <h1>Léo DIDIER</h1>
  <h5>Web developer</h5>
  <p class="pr">Étudiant en deuxième année de cycle préparatoire en école d’ingénieurs en informatique.
        À la recherche d’un stage en entreprise du mardi 23 avril 2019 au vendredi 28 juin 2019.</p>
  <ul>
  <li><a href="#" id="skill"><i class="fas fa-wrench"></i></a></li>
  <li><a href="#" id="skill2"><i class="fas fa-bezier-curve"></i></a></li>
  <li><a href="#" id="skill3"><i class="fas fa-plus-square"></i></a></li>
</ul>


      </div>
      
      <script>
      var text= "<section class='pr'><h3>Langages informatiques</h3><p>C, Java, HTML, CSS, PHP (Laravel), JS (Node.js), Bash</p><h3>Logiciels</h3><p>Pack Office, , MS Project, Photoshop, Illustrator, MySQL, Packet Tracer, VMware, VirtualBox</p><h3>Gestion de projet</h3><p>REX, PRA, GANTT, PERT, WBS</p><h3>Réseau</h3><p>Création et gestion d'un réseau -Certification CCNA1/CCNA2</p></section>";

      $( "#skill" ).click(function() {
            $(".pr").replaceWith(text);
            });

            var textP= "<p class='pr'>Étudiant en deuxième année de cycle préparatoire en école d’ingénieurs en informatique. À la recherche d’un stage en entreprise du mardi 23 avril 2019 au vendredi 28 juin 2019.</p>";

      $( "#skill2" ).click(function() {
            $(".pr").replaceWith(textP);
            });
  
 var textE= "<section class='pr'><h2>Expériences professionnelles</h2><h3>Analyste de support informatique</h3><h4>Mars Wrigley Confectionery</h4><h5>Haguenau</h5><p>- Préparation et remplacement de PCs utilisateurs- Installation de W10 sur des postes situés dans l'usine et dans le bureau- Accompagnement utilisateurs- SAV/prise en charge utilisateur après intervention si souci- Formation des utilisateurs sur des technologies nouvelles à l'entreprise</p></section>";

      $( "#skill3" ).click(function() {
            $(".pr").replaceWith(textE);
            });
            
            </script>
@endsection  