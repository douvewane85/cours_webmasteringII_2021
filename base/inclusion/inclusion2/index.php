<?php
  $vue="vue1";
  $layout="layout1";
   if(key_exists("menu",$_GET) && isset($_GET["layout"])){
         extract($_GET);
          $vue=$menu;
       //$layout="layout2";
   }
     ob_start();
        include_once ("$vue.html.php");
     $content_views=ob_get_clean();
    include_once ("$layout.html.php");
