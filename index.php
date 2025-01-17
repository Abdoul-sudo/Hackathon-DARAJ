<body>
<nav class="navbar navbar-expand-lg navbar-light py-3 bg-light"  id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">DARAJ</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse " id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 ml-auto langue">
                        <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?view=global">Global</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?view=national">National</a></li>
                    </ul>
                </div> 
            </div>
        </nav>

        
<?php

require_once 'models/Connect.php';
require_once 'models/Requete.php';

if (isset($_GET['view']) && $_GET['view']=="global") {
  require_once 'controllers/TechniqueGlobaleController.php';
  $cont = new TechniqueGlobaleController;
  $cont->afficheTechGlo();
}
else if (isset($_GET['view']) && $_GET['view']=="national") {
    require_once 'controllers/TechniquesController.php';
    $technique = new Technique;
    if (isset($_GET['page']) && $_GET['page']=="technique") {
      $technique->afficheTech();
    }
    else{
      $technique->afficheMada();
    }
  }
else {
  require_once 'views/Accueil.php';

}

