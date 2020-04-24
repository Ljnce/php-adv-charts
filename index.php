<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Charts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script src="https://kit.fontawesome.com/4cd7baf8bb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>


        <!-- MILESTONE 1 -->
        <div class="container-big">

            <div class="title">
                <h1>Milestone 1: metodo Ajax e PHP</h1>
                <i class="fas fa-chart-line"></i>
            </div>
            <!-- Metodo con chiamata ajax array $data [grafico 1]: -->

            <div class="container-ajax">
                <canvas id="grafico-ajax"></canvas>
            </div>

            <!-- Metodo con js (do i valori del mio array su data-chart) [grafico 2]-->

            <div class="container-js">
                <?php include 'data.php'; ?>
                <canvas id="grafico-js" data-chart='<?php echo $datajson; ?>'></canvas>
            </div>

        </div>

        <!-- MILESTONE 2 + 3 -->

            <!-- Metodo tramite chiamata ajax [grafici 3] + Milestone 4 (in progress)-->
        <div class="container-get">

            <div class="title">
                <h1>Milestone 3: chiamata grafico tramite GET</h1>
            </div>
            <?php $call = $_GET['level']; ?>

            <?php if ((empty($call)) || ($call == 'guest')) {?>
                <div class="container-anni">
                    <canvas id="grafico-anni"></canvas>
                </div>
            <?php } elseif ($call == 'employee'){?>
                <div class="container-venditori">
                    <canvas id="grafico-venditori"></canvas>
                </div>
            <?php } elseif ($call == 'clevel'){?>
                <div class="container-team">
                    <canvas id="grafico-team"></canvas>
                </div>
                <div class="container-venditori">
                    <canvas id="grafico-venditori"></canvas>
                </div>
            <?php } else {?>
                <script type="text/javascript">
                    alert('Wrong way');
                </script>
            <?php }?>

        </div>

        <!-- Metodo tramite PHP [grafico 4]-->

        <div class="container-bottom">

            <div class="title">
                <h1>Milestone 2: grafico con chiamata PHP in "data-type"</h1>
            </div>

            <?php include 'data.php'; ?>

            <?php

                $pie_data = $graphs["fatturato_by_agent"]['data']; //Entro nell'array che mi serve;
                $venditori = [];
                $vendite = [];

                foreach ($pie_data as $key => $value) { //Ciclo per trovare le mie chiavi e valori;
                $venditori[]= $key; //Push delle mie chiavi dentro l'array vuoto venditori;
                $vendite[]= $value; //Push dei miei valori dentro l'array vuoto vendite;
                };

            ?>

            <div class="container-php">
                <canvas id="grafico-php" data-venditori= '<?php echo json_encode($venditori); ?>' data-vendite= '<?php echo json_encode($vendite); ?>'></canvas>
            </div>
        </div>
        <div class="container-mobile">
            <div class="enter">
                <div class="push">
                    <h1>Chart PHP/JS</h1>
                    <i class="fas fa-chart-pie"></i>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/main.js" charset="utf-8"></script>
    </body>
</html>
