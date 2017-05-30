<?php
include('./db/DbConn.php');
$db = new DbConn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pitloze Duif</title>
</head>
<body>
<h2>
    Voer duif informatie in <br>

</h2>

<div style=" border: 1px solid grey; float:left;">

<?php include('src/doveInfo.php'); ?>

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



</body>
</html>
