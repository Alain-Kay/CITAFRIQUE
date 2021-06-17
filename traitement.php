<?php
require('citation.php');

function afficher_citations($citations) 
{
    foreach($citations as $key => $valeur) 
    {
        $auteur = $valeur[0];
        $citation = $valeur[1];
        
        echo '
        <div class="container">
        <div class="carousel-caption">
          <h1>'.$auteur.'</h1>
          <p>'.$citation.'</p>
        </div>
      </div>';
    }
}