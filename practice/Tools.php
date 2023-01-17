<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tools Webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="Toolslogo.jpeg" alt="Logo" width="40" height="32" style="border-radius: 10px;" class="d-inline-block align-text-top">
      TOOLS
    </a>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Features
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
  </div>
</nav>
    <h1>Hello! <br>Hopefully this contains a bunch of potentially useful tools ;)</h1>

    <?php 
    echo "<br><h3>Calculation section </h3>"; 
    echo "Calculator - Enter operation <br>
    1 => Addition/ subtraction of multiple numbers <br>
    2 => Multiplication of multiple numbers <br>
    3 => Division of 2 numebrs<br>
    4 => Sum of factorials of numbers <br>";
    ?>

    <form action="Tools.php" method="get">
    Operation: <input type="text" name="operation"><br>
    Numbers: <input type="text" name="numbers"><br>
    <input type="submit">
    </form>
    <?php
    $op = $_GET["operation"];
    $ar = explode(" ",$_GET["numbers"]);
    echo var_dump($ar);
    echo "<br>";
    switch ($op){
        case 1:
            echo "Evaluation is being performed<br>";
            sleep(2);
            $result = 0;
            foreach ($ar as $i){
                $result += (int)$i;
            }
            echo $result;
            break;
            case 2:
                echo "Evaluation is being performed<br>";
                sleep(2);
                $result = 1;
                foreach ($ar as $i){
                    $result *= (int)$i;
                }
                echo $result;
                break;
            case 3:
                if (count($ar)!=2){
                    echo "Incorrect input";
                    break;
                }
                echo "Evaluation is being performed<br>";
                sleep(2);
                $result = (int)$ar[0]/(int)$ar[1];
                $remainder = (int)$ar[0]%(int)$ar[1];
                echo "Result - ".(int)$result."<br>Remainder - ".$remainder;
                break;
                case 4:
                    echo "Evaluation is being performed<br>";
                    sleep(2);
                    $fact = 0;
                    foreach($ar as $i){
                        $d = 1;
                        for($c=1;$c<=(int)$i;$c++){
                            $d *=$c;
                        }
                        $fact +=$d;
                    }
                    echo "Some of factorials - ".$fact."<br>";
                    break;
                default:
                    echo "Incorrect input ;p<br>";
                    break;
    }
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>