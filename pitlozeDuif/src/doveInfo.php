<?php
include('../db/DbConn.php');

if (isset($_POST['sendThis'])) {
    $db = new DbConn();
    $firstName = $db->quote($_POST['name_send']);
    $lastName = $db->quote($_POST['lastName_send']);
    $nameDove = $db->quote($_POST['comment_send']);
    $weightDove = $db->quote($_POST['comment_send']);
    $ageDove = $db->quote($_POST['comment_send']);

    $write = $db->query("INSERT INTO `doveAdmin` (`owner_firstname`, `owner_lasttname`, `name_dove`, `weight_dove`, `age_dove` ) 
                         VALUES(" .$firstName. "," .$lastName. "," .$nameDove. " ," .$weightDove. "," .$ageDove. ")");
}

print_r($write);

?>


<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

    Eigenaar
    Voornaam:<input type="text" name="firstName_send" > <br>
    Achternaam:<input type="text" name="lastName_send" >  <br> <br>

    Duif: <br>
    Naam duif:<input type="text" name="nameDove_send" > <br>
    Gewicht duif:<input type="text" name="weightDove" > <br>
    Leeftijd duif:<input type="text" name="ageDove" > <br>

    <input type="submit" value="Submit" name="sendThis"> <input type="reset" value="Reset">

</form>


