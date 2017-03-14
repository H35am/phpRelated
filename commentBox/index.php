<?php 	session_start(); ?>
<?php include('incl/conn.php');	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>comment</title>
</head>
<body>
<h2>
    Comments and stuff!
</h2>
<iframe src="src/c_box.php">
    <p>iframes not supported.</p>
</iframe>
<h3>
    <?php
    $sql_reactie = "SELECT * FROM comments ORDER BY date DESC";

    $ophalen_reactie = mysqli_query($sql_reactie);
    $aantal_reacties = mysql_num_rows($ophalen_reactie);

    ?>
</h3>

</body>
</html>
