<form method="post">

    Name: <input type="text" name="Name" id="name"> <br>

    Comment: <br>
    <textarea type="text" name="Comment" id="comment"> </textarea> <br>

    <input name="commentId" id="commentId" type="hidden" value="<? echo $_GET['id']; ?>" >

    <input type="submit" value="Submit"> <input type="reset" value="Reset">

</form>


