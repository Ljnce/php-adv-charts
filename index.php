<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Charts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <!-- Metodo con chiamata ajax [grafico 1]: -->
    <div class="container-ajax">
        <canvas id="grafico-ajax"></canvas>
    </div>


        <!-- Metodo con js (do i valori del mio array su data-chart) [grafico 2]-->
    <div class="container-js">
        <?php include 'data.php'; ?>
        <canvas id="grafico-js" data-chart='<?php echo $datajson; ?>'></canvas>
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/main.js" charset="utf-8"></script>
    </body>
</html>
