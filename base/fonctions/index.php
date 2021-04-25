<?php
 
 function format_data(mixed $val){
     return  trim(stripslashes(strip_tags($val)));
 }
  function est_empty(mixed $val):bool{
     return empty($val);
  }
  function est_number(mixed $val):bool{
    return is_numeric($val);
  }

  function somme(float $nbre1,float $nbre2):float{
      return $nbre1+$nbre2;
  }
  function difference(float $nbre1,float $nbre2):float{
    return $nbre1-$nbre2;
}
function produit(float $nbre1,float $nbre2):float{
    return $nbre1*$nbre2;
}
function quotient(float $nbre1,float $nbre2):float{
    if($nbre2!=0){
        return $nbre1*$nbre2;
    }
    return NAN;
}

//var_dump(quotient(3,0));