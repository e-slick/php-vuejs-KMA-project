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

        //creating two vue.js components
        const Home = { template: '<div> Home page </div>' };
        const About = { template: '<div> About page </div>' };

        /*------------
        ROUTE SECTION
        ------------*/

        //defining the "routes" the browser will take -- i think
        const routes = [
            { path: '', component: Home },
            { path: '/about', component: About },
            { path: '*', component: Home }
        ];

        //creating a new router instance and passing the route array into it
        const router = new VueRouter({
            mode: 'history',
            routes: routes
        });

        //creating a vue instance and populating it with the router instance
        const app = new Vue({
            router: router
        }).$mount('#app');

    </script>

    <a href="first.php">Functionality</a>
    <br>
    <a href="login.php">My Blogs</a>
    <br>
    <a href="signup.php">Sign up</a>





</body>
</html>