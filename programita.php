<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arreglitos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        for($i=0; $i<50; $i++){
            $a[$i] = rand(1, 100); // rand es por random, lo aprendí anteriormente :v
        }
        echo implode(", ", $a);
    ?>
</body>
</html>