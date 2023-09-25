<?php 

$php_censurare = $_GET["censurare"];
$php_paragrafo = $_GET["paragrafo"];
$len_paragrafo = strlen($php_paragrafo);
$php_censurato =str_replace($php_censurare,'***',$php_paragrafo);
$ciccione = 3 + 11;
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <!-- aggiungo bootstrap -->
        <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
      defer
    ></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<body>
<div class="container my-5">

    
    <h1> questo è il paragrafo originale</h1>
    <div class="mx-5 mb-5"> paragrafo: " <?php echo $php_paragrafo ?> " </div>
    <div class="mx-5 mb-5"> lunghezza in caratteri: " <?php echo strlen($php_paragrafo) ?> " </div>
    
    <h1>la parola da censurare:</h1>
    <div class="text-danger mx-5 mb-5"> >>> <?php echo $php_censurare ?> </div>
    
    <h1> questo è il paragrafo originale</h1>
    <div class="mx-5 mb-5"> paragrafo: " <?php echo $php_censurato ?> " </div>
    <div class="mx-5 mb-5"> lunghezza in caratteri: " <?php echo strlen($php_censurato) ?> " </div>
    
</div>
    


</body>
</html>