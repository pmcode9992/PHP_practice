
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA TYPES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <nav class="navbar fixed-top bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
    </div>
  </nav>
</div>
<br><br>
    <h1>Data Types in PHP</h1>
    <ul class="list-group list-group-numbered">
  <li class="list-group-item">Integers</li>
  <li class="list-group-item">Strings</li>
  <li class="list-group-item">Float</li>
  <li class="list-group-item">Boolean</li>
  <li class="list-group-item">Object </li>
  <li class="list-group-item">Array</li>
  <li class="list-group-item">NULL</li>
</ul>
<br><br>
<?php
$cgpa = 9.11;
$balance = 900;
$name = "Pranav";
$codes = true;
$is_rich = false;
echo "Name = $name <br>CGPA = $cgpa <br>Balance = $balance <br>Codes = $codes <br>Is_rich =";
echo var_dump($is_rich);
$apples = array("Empire", "Fuji", "Gala", "Honey Crisp");
echo "<br> Types of apples =";
echo var_dump($apples);
echo "<br>";
echo $apples[0];
echo "<br>";
echo $apples[1];
echo "<br>";
echo $apples[2];
echo "<br>";
echo $apples[3];
echo "<br>";

$cgpa = NULL;

?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>