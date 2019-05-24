
<form action="blogPage.php" method="post">
    Username: <input type="text" name="username" /><br /><br />
    Password: <input type="password" name="password" /><br /><br />
    <input type="submit" name="submit" value="Login" />
</form>

<a href="index.php">Home</a>



<?php include 'Blogger.php';


//NOTE THAT THE LOGIN PAGE WOULD NOT SUCCESSFULLY LOGIN EVER BECAUSE IF A USER INPUTS A NAME THAT'S IN THE DATABASE
//THE USER IS AUTOMATICALLY REDIRECTED. THIS BEGS FOR A SIGN UP AND A LOGIN PAGE SEPARATELY.






?>