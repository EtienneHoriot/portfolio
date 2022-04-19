<?php
//page d'accueil
//chargement des paramètres de la BD et connexion
include('./utils/db.php');


?>

<div class="fondBleu">

    <div id="titre">
        <h1>ETIENNE HORIOT</h1>
    </div>
    <div id="titre2">
        <h2>PORTFOLIO<h2>
    </div>

    <div class="container">
        <a class="bloc" href="index.php?page=infographie">
            <div id="blocInfo">
                <div id="titreBlocInfo">Infographie</div>
            </div>
        </a>
        <a class="bloc" href="index.php?page=photographie">
            <div id="blocPhoto">
                <div id="titreBlocPhoto">Photographie</div>
            </div>
        </a>
        <a class="bloc" href="index.php?page=web">
            <div id="blocWeb">
                <div id="titreBlocWeb">Web</div>
            </div>
        </a>
    </div>

</div>

<div class="fondBleuClair">

    <div id="blocPresentation">

        <div id="titre3">
            <h3>Petite présentation de moi-même</h3>
        </div>

        <div id="blocTexte">
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce id mauris sit amet dolor laoreet consequat. Donec posuere eleifend lobortis. Fusce et orci quis turpis facilisis efficitur quis vitae massa. Duis quis mi egestas, sollicitudin nisl fringilla, rutrum lectus. Duis ligula orci, placerat ac sagittis vel, rutrum quis augue. Mauris at enim lacinia, auctor lorem ut, imperdiet justo. In scelerisque orci eget nunc aliquet, vel molestie nibh ullamcorper. Mauris ultricies porttitor massa sit amet sagittis. Sed posuere enim lacus, eu posuere sapien euismod vitae. Integer dignissim arcu felis, sed varius tortor euismod at.</p>
        </div>
    </div>
    
    <div id="containerBlocContact">
        <div id="blocContact">
            <a href="mailto:etienne.horiot@outlook.com" target="_blank">Contactez-moi</a>
        </div>
    </div>

</div>