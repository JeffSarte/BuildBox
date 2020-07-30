<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="profile.css">
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
 
    
    <div class="profile">
<br><br>
    <div class="image1">
        <img src="#" alt="">
    </div>
<br>
    <div class="description">

        <h5>Adrian Espano</h5>
        <h5>hahahaha hahahah hahahah </h5>

    </div>


    <div class="appointment">

        <div class="textSize">

        Schedule Apppointment : <br>
        Customer Name: <br>
        <input class="password"  placeholder="Name" type="text"> <br>
        Phone Number: <br>
        <input class="password"  placeholder="PhoneNumber" type="text"> <br>
        Service Type: <br>
        <select name="cars" id="cars">
            <option value="1">Computer Build</option>
            <option value="2">s2</option>
            <option value="3">s3</option>
            <option value="4">s4</option>
        </select> <br> 
        Service Date:
 <br>
        <input type="date">
        </div>

        <div class="buttonPosition">
      
           <button type="button" class="btn btn-primary btn-lg">Schedule</button>

        </div>


    </div>

    </div>

    

</body>
</html>