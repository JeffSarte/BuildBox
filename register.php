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

           Already Member ? <a href="login.php">Login</a> Here 

        </div>

        </h2> 
    </div>
  

        <div class="logins">
    <br><br>
           
                <div class="input">
                    <div class="size">
                 <input  class="f1" placeholder="FirstName "type="text"><br>
                 <input  class="l1" placeholder="LastName" type="text"><br>
                 <input  class="e1" placeholder="Email" type="text"><br>
                 <input  class="p1" placeholder="PhoneNumber" type="text"><br>
                 <input  class="p2" placeholder="Password" type="text">
                 </div>
                 
                </div>
                <br><br>
                    <div class="button">
                    <button type="button" class="btn btn-primary btn-lg">SignUp</button>
                    </div>
            

        </div>

    </div>

    

</body>
</html>