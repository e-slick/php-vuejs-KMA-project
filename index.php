<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vue.js in PHP</title>
    <script src="js/vue.js"></script>
    <script src="js/vue-router.js"></script>
</head>
<body>
    <div id="app">
        <p>{{ message }}</p>
    </div>
    <script>
        new Vue({
            el: "#app",
            data: {
                message: 'Vue/PHP Project for KMA'
            }
        });
    </script>

    <?php include 'Blogger.php';
        //Database initialization to be passed throughout the website using POST method and json.encode
        $myFakeDB = new MockDB();
        $tempUser = new Blogger("slicke", "1234");
        $tempUser1 = new Blogger("user1", "4321");
        $myFakeDB->addUsersArray($tempUser);
        $myFakeDB->addUsersArray($tempUser1);
        $post = json_encode($myFakeDB->displayUsersArray());
        echo $post;

        file_put_contents("data.json",$post);
    ?>


    <form action="login.php" method="post">
        <input type="submit" name="<?php echo $post ?>" value="My Blogs" />
    </form>






    <a href="first.php">Functionality</a>
    <br>
    <br>
    <a href="signup.php">Sign up</a>





</body>
</html>