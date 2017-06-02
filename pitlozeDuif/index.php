<?php
include('./db/DbConn.php');
$db = new DbConn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <title>Pitloze Duif</title>
</head>
<body>
<div class="container">
<h2>
    Voer duif informatie in <br>

</h2>

<div style=" border: 1px solid grey; float:left;" class="rounded, m-1, p-2">

    <?php
    include_once "incl/doveInfo.php";
    ?>
</div>

<div style="clear: both;">

<h3 style="padding-top: 20px">
    Duif informatie:


</h3>
    <h5>
    <?php
    $rowsAll = $db -> select('SELECT * FROM `doveAdmin` ORDER BY `id` DESC');
    foreach ($rowsAll as $row){
        echo "NR: "        . $row['id']. "<br>" .
            "Naam eigenaar: " . $row['owner_firstname']. " " . $row['owner_lastname']. "<br>" .
            "Naam duif: "   . $row['name_dove'] . "<br>" .
            "Gewicht: "      . $row['weight_dove']. "<br>" .
            "Leeftijd: "      . $row['age_dove']. "<br>" .
            "<br>"
        ;
    }


    ?>
    </h5>


</div>
</body>
</html>
