<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arreglitos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="contenedor">
        <button type="submit" name="mayores">Ver los tres mayores</button>
        <?php
            if ($_SERVER["REQUEST_METHOD"]==="POST" && isset ($_POST['mayores'])){
                for($i=0; $i<50; $i++){
                    $a[$i] = rand(1, 100);
                }
                echo implode(", ", $a);
                
                for($i=0; $i<3; $i++){
                    $m[$i] = max($a);
                    $p = array_search($m[$i], $a);
                    unset($a[$p]);
                }
                echo implode(", ", $m);
            }
        ?>
    </div>
</body>
</html>