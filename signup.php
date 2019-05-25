
<form action="" method="post">
    Username: <input type="text" name="username" /><br /><br />
    Password: <input type="password" name="password" /><br /><br />
    <input type="submit" name="submit" value="Sign Up" />
</form>

<a href="index.php">Home</a>



<?php include 'Blogger.php';

    $tempUser = new Blogger("eslick", "1234");
    $mockDB = new MockDB();
    $mockDB->addUsersArray($tempUser);
    $redirectURL = "signup.php";
    if($mockDB->searchUsersArray($_POST["username"])) {
        header("Location:".$redirectURL);
        echo "User already exists";
        die();
    }

?>