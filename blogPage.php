


<form action="" method="post">
    Title: <input type="text" name="title" /><br /><br />
    Text: <textarea type="text" name="blog" rows="5" cols="40" /></textarea><br /><br />
    <input type="submit" name="submit" value="Post to my Blog" />
</form>

<?php include 'Blogger.php';

//This code is temporary, still working on sending JSON object using a form
//Once the server is accessed I create a "MockDB" object in order to store users and manipulate the class for 'show'

$tempUser = new Blogger("eslick", "1234");
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
