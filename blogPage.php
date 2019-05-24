


<form action="" method="post">
    Title: <input type="text" name="title" /><br /><br />
    Text: <input type="text" name="blog" /><br /><br />
    <input type="submit" name="submit" value="Post to my Blog" />
</form>

<?php include 'Blogger.php';
$tempUser = new Blogger("eslick", "1269");
$mockDB = new MockDB();
$mockDB->addUsersArray($tempUser);
$redirectURL = "login.php";
    if($mockDB->searchUsersArray($_POST["username"])){
        header("Location:".$redirectURL);
        die();
    }
    else{
        echo "Login successful.";
    }



?><br />

<a href="index.php">Home</a>
