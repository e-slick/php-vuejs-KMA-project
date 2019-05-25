
<form action="blogPage.php" method="post">
    Username: <input type="text" name="username" /><br /><br />
    Password: <input type="password" name="password" /><br /><br />
    <input type="submit" name="submit" value="Login" />
</form>

<a href="index.php">Home</a>



<?php include 'Blogger.php';

echo $_POST[''];






/*
    $tempUser = new Blogger("eslick", "1234");
    $mockDB = new MockDB();
    $mockDB->addUsersArray($tempUser);
    $redirectURL = "login.php";
    $redirectURL2 = "blogPage.php";
    if($mockDB->searchUsersArray($_POST["username"])){
        header("Location:".$redirectURL);
        die();
    }
    else{
        header("Location:".$redirectURL2);
        die();
    }
*/

?>