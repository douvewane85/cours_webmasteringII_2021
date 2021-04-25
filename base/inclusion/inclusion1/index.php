<?php
    $title="Inclusion";
    $content="Contenu de ma Page";
    include 'header.php'; echo"<br>";
    require_once ('content.php') ;echo"<br>";
    //include_once 'content.php';echo"<br>";
    include 'footer.php';echo"<br>";