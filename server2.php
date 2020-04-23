<?php

    include 'data.php';
    header ('Content-Type: application.json');
    echo json_encode($graphs); //Lo decodifico in jason per il mio java

 ?>
