<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="navPosition">

        <?php
            include "navbar.html";
        ?>

    </div>

    <div class="headerImage">
        <img src="image/banner1.jpg">
    </div>
 
    <div class="login">
    <br><br>

    
    <div class="register">

        <h2>Welcome to BoxBuild Tech !

        <div class="space">

           New Member ? <a href="register.php">Register</a> Here 

        </div>

        </h2> 
    </div>
  

        <div class="logins">
    <br><br>
           
                <div class="input">

                 <input class="userName"  placeholder="UserName "type="text"><br><br>
                 <input class="password"  placeholder="Password" type="text">

                 
                </div>
                <br>
                    <div class="button">
                    <button type="button" class="btn btn-primary btn-lg">Login</button>
                    </div>
            

        </div>

    </div>

    

</body>
</html>