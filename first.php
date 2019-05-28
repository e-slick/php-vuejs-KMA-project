<html>
<body>
<strong>Welcome,</strong> this page outlines many of the features I learned during this project
<br><br>
<a href="index.php">Home</a>
<br>


 <?php include 'Blogger.php';












 // CODE SHOWCASING WORKING FUNCTIONALITY FOR USER/DATABASE CLASS
 // ***********************************************************
    $mockDatabase = new MockDB();


    $newBlogger = new Blogger("Blogman", "password1234");
    $mockDatabase->addUsersArray($newBlogger);
    echo $newBlogger->getUsername(), "you have: ";
    echo $newBlogger->getAmtPosts();
    echo " posts.", "<br><br>";


 //CODE SHOWCASING WORKING FUNCTIONALITY FOR BLOGGER CLASS
 //*******************************************************
    $userBlog = new Blogger("Blogwoman", "1234password");
    $mockDatabase->addUsersArray($userBlog);
    $userBlog->addEntry("a", "this is an entry");
    $userBlog->addEntry("b", "an entry this is");
    $userBlog->displayEntries();
    $userBlog->removeEntry("a");
    echo "<br><br><strong><i>After Removing An Entry</i></strong><br><br>";
    $userBlog->displayEntries();
    echo "<br><br>", "<strong><i>Displaying users from DB</i></strong>", "<br><br>";
    $mockDatabase->displayUsersArray();

    ?>

</body>
</html>
