<?php
require "CalculatePrimeNumber.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h3>
    <?php

    $oPrime = new CalculatePrimeNumber();
    $aPrimes = $oPrime->priemCijferLijst(20000);

    foreach ($aPrimes as $prime)
        echo $prime ."<br />";
?>
</h3>

</body>
</html>
