<?php

if (isset($_POST['sendThis'])) {

    $dbWrite = new DbConn();
    $firstName = $dbWrite->quote($_POST['firstName_send']);
    $lastName = $dbWrite->quote($_POST['lastName_send']);
    $nameDove = $dbWrite->quote($_POST['nameDove_send']);
    $weightDove = $dbWrite->quote($_POST['weightDove']);
    $ageDove = $dbWrite->quote($_POST['ageDove']);

    $dbWrite->query("INSERT INTO `pitlozeDuif`.`doveAdmin` (`owner_firstname`, `owner_lastname`,`name_dove`,`weight_dove`,`age_dove`) 
VALUES (".$firstName. "," .$lastName. "," .$nameDove. " ," .$weightDove. "," .$ageDove. ")");

}

?>


<form class="form-horizontal" method="post" action="<?php $_SERVER['php_self']; ?>">
    <div class="form-group">
        <div class="col">
            <h4>Eigenaar</h4>
        </div>
        <label class="control-label col-sm-2">Voornaam:</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="firstName_send" >
        </div>
        <label class="control-label col-sm-2" >Achternaam:</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="lastName_send" >
        </div>
    </div>

    <div class="form-group">
        <div class="col">
            <h4>Duif: </h4>
        </div>
        <label class="form-control-label col-sm-10"> Naam duif:</label>
        <div class="col-sm-10">
        <input class="form-control" type="text" name="nameDove_send" >
        </div>
        <label class="form-control-label col-sm-10"> Gewicht duif:</label>
        <div class="col-sm-10">
        <input class="form-control" type="text" name="weightDove" >
        </div>
        <label class="form-control-label col-sm-10"> Leeftijd duif:</label>
        <div class="col-sm-10">
        <input class="form-control" type="text" name="ageDove" >
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <input class="btn btn-default" type="submit" value="Submit" name="sendThis">
        <input class="btn" type="reset" value="Reset">
        </div>
    </div>
</form>
