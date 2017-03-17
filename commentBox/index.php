<?php
include('./db/DbConn.php');
$db = new DbConn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>comment</title>
</head>
<body>
<h2>
    Leave a comments about this cutie! <br>
    <img src="http://placekitten.com/400/200" />
</h2>



<iframe src="src/c_box.php">
    <p>iframes not supported.</p>
</iframe>
<h3>
    Comments:


</h3>
    <h5>
    <?php
    $rowsAll = $db -> select('SELECT * FROM `comments` ORDER BY `id` DESC');
    foreach ($rowsAll as $row){
        echo "NR: "        . $row['id']. "<br>" .
             "Name: "      . $row['naam']. "<br>" .
             "Commnet: "   . $row['msg'] . "<br>" .
             "Date: "      . $row['date']. "<br>" .
            "<br>"
        ;
    }
    ?>
    </h5>



</body>
</html>
