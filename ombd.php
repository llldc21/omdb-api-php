<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <br>
        <div class="row">
            <div class="offset-2"></div>
            <div class="col-md-8 text-center">
                <a href="ombd.php"><h1 class="display-2 text-center">Faça sua busca!</h1></a>
            </div>
            <div class="offset-2"></div>
            <br>
            <br>
            <div class="offset-2"></div>
            <div class="col-md-8 text-center">
                <form action="" method="post">
                    <input type="text" class="form-control" name="procura" id="procura" placeholder="Digite o nome do filme...">
                
                    </div>
                    <div class="offset-2"></div>
                    <br>
                    <br>
                    <div class="offset-2"></div>
                    <div class="col-md-8 text-center">
                        <input type="submit" class="btn btn-primary btn-block" value="Enviar">
                    </div>
                    <div class="offset-2"></div>
                </form>
            <br>
            <br>
            <div class="offset-2"></div>
            <div class="col-md-8 text-center">
                <?php
                $key = '8d5a8aff';
                $pesquisa = $_POST['procura'];
                $api_url = json_decode(file_get_contents('http://www.omdbapi.com/?apikey='.$key.'&s='.$pesquisa.''));

                foreach($api_url->Search as $search){
                    echo '<h4 class="display-4 text-center" >'.$search->Title.'</h4>';
                    echo '<img src="'.$search->Poster.'" alt="" srcset=""><br><br>';
                    $id = $search->imdbID;
                    $api_id = json_decode(file_get_contents('http://www.omdbapi.com/?i='.$id.'&apikey='.$key.''));
                    echo $api_id->Plot.'<br><br>';
                };
                ?>
            </div>
            <div class="offset-2"></div>
            <br>
            <br>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>