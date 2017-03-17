<?php
include('../db/DbConn.php');

if (isset($_POST['sendThis'])) {
    $db = new DbConn();
    $name = $db->quote($_POST['name_send']);
    $msg = $db->quote($_POST['comment_send']);

    $write = $db->query("INSERT INTO `comments` (`naam`,`msg`) VALUES(" . $name. "," .$msg. ")");
}

print_r($schrijf);

?>


<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

    Name: <input type="text" name="name_send" > <br>

    Comment: <br>
    <textarea type="text" name="comment_send" ></textarea> <br>

    <input type="submit" value="Submit" name="sendThis"> <input type="reset" value="Reset">

</form>


