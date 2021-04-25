<?php
    if(key_exists("btn_submit",$_POST)) {
       $arr_error=[];
       $nbre1= trim(stripslashes(strip_tags($_POST['nbre1'])));
       $nbre2= trim(stripslashes(strip_tags($_POST['nbre2'])));
       $op=trim(stripslashes(strip_tags($_POST['nbre2'])));
       $result="";
       switch($op){
            case "+":
                $result=$nbre1+$nbre2;
             break;
            case "-":
                $result=$nbre1+$nbre2;
                break;
            case "*":
                $result=$nbre1*$nbre2;
                break;
            case "/":
                if($nbre2!=0)
                 $result=$nbre1/$nbre2;
                else
                echo "Impossible";
                break;
            case "%":
                if($nbre2!=0)
                 $result=$nbre1%$nbre2;
                else
                echo "Impossible";
                break;
                    break;

       }
      
    } 
  
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

      <div class="container mb-5">
         <h2 class="text-info">Calculatrice</h2>
          <form>
              <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label"> Nombre 1</label>
                  <div class="col-sm-6 ml-2">
                      <input type="text" class="form-control" name="nbre1" id="inputName" placeholder="">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label"> Nombre 2</label>
                  <div class="col-sm-6 ml-2">
                      <input type="text" class="form-control" name="nbre2" id="inputName" placeholder="">
                  </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Operateur</label>
                <select class="form-control col-sm-6 ml-3" name="op" id="">
                    <option>Addition </option>
                    <option>Soustraction</option>
                    <option>Division</option>
                </select>
              </div>
              <div class="form-group row">
                  <div class="offset-7 col-sm-4 ">
                      <button type="submit" class="btn btn-primary" name="btn_submit" value="btn_egal">=</button>
                  </div>
              </div>
            
          </form>
      </div>
      <p class="mt-2">
        <?php echo "<strong>Resultat</strong> :{$result}"; ?>
      </p>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>