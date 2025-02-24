<?php
// get: used to get data through the URL
// post: we can get data from forms



echo $_POST['name'];

echo $_POST['password']; //WHEN FIRST LOAD THE PAGE T SHOWS ERROR BBECAUSE THERE IS NOTHING TO POST SO INORDER NOT TO GET THAT ERRRO WE SHOULD
if (isset($_POST['submit'])) {
    // echo '<h3>' . $GET['username'] . '</h3>';
    echo '<h3>' . $_POST['name'] . '</h3>';
    echo '<h3>' . $_POST['password'] . '</h3>';
} ?>
?>


<a href="<?php echo $_SERVER['PHP_SELF']; ?>">click me</a><!-- when you click the link, it will take you to the same page -->

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?">click me</a><!--this gives http://localhost:3000/get&post%20.php? its called query string written after it its gives waring before becasuse on that page the values arent there after clcik-->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=nunu">click me</a><!-- this returns nunu clickme -->





<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label>Name: </label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label>Password: </label>
        <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit"><!-- after one sumbmit the values the above php wuth get are replaced  but for get u can see the value on the url so to make it secure use post-->
</form>