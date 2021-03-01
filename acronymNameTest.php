<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acronymName</title>
    <style>
            .card-fail {
            border:1px solid ;
            padding: 0.5rem;
            margin-bottom: 1rem;
            color: hsl(0, 100%, 50%);
            background-color: hsl(0, 100%, 95%);
            width: 300px;

        }

        .card-pass {
            border:1px solid ;
            padding: 0.5rem;
            margin-bottom: 1rem;
            color: hsl(120, 100%, 25%);
            background-color: hsl(120, 100%, 95%);;
            width: 300px;
        }
    </style>
</head>
<body>
<?php

require './acronymName.php';

$dataset = array(
['gioco molto difficile','G.M.D.'],
['General Motors','G.M.'],
['Federal Bureau Investigation','F.B.I.'],
['collegio Universitario Crocetta','C.U.C.'],
);
?>
<ul>
<?php
    foreach ($dataset as $row) {
        $text = $row[0];
        $atteso = $row[1];
    

        $result = acronymName($text);
        if ($result == $atteso) {
            echo "<div class='card-pass'> Atteso: $atteso;<br> Risultato: $result;<br> PASS - tutto ok;<br></div>";
        } else {
            echo "<div class='card-fail'> Atteso: $atteso;<br> Risultato: $result;<br> FAIL - Test Fallito;<br></div>";
        }
    }
    ?>
    </ul>
</body>
</html>

