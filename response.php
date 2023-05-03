<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php
        $testo = $_GET["testo"];
        $parola = $_GET["parola"];
        
        $testo_filtrato = str_replace(strtolower($parola), "***", strtolower($testo))
    ?>

    <div class="wrapper vh-100 d-flex flex-column align-items-center justify-content-center gap-3 ">
        <div class="w-50">
            <h2>Paragrafo lungo: <?php echo strlen($testo);?> </h2>
            <p>
                <?php echo $testo; ?>
            </p>
        </div>
        
        <div class="w-50">
            <h2>Paragrafo modificato lungo: <?php echo strlen($testo_filtrato);?> </h2>
            <p>
            <?php echo $testo_filtrato; ?>
            </p>
        </div>
    </div>

</body>
</html>





