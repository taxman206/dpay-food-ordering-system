<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .topnav {
  overflow: hidden;
  background-color: #333;
}

        .header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}
        
        .footer {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
    margin-top: 120px;
  

}
        
        .topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
        .bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
    color:#ff6347;
}

.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}
        
        img{
            width: 100%;
            height:100%;
        }
        .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
        p.one {
  border-style: solid;
  border-width: 5px;
  border-color: black;
  background-color: black;
  
 
}
    </style>
</head>
<body>

<div class="header">
    <h1>Restuarants Near You</h1>
    </div>
    <div class="topnav">
  <a href="testingpersonal.php">Personal</a>
  <a href="addcard.php">Payment</a>
  <a href="logout.php">logout</a>
</div>
  <div class="row">
    <div class="col-lg-6"><img class="img-responsive" src="friedchickens.jpg" />
        <div class="top-left"><a href="friedchicken.php"><p class="one">KAMAS FRIED CHICKEN.</p></a></div></div>
      <div class="col-lg-6"><img class="img-responsive" src="cartoon.gif" />
          
          <div class="top-right"><a href="#"><p class="one">BurgerLab</p></a></div></div>
      <div class="col-lg-6"><img class="img-responsive" src="pizza.jpg" />
          <div class="top-left"> <a href="#"><p class="one">Sways Dine In</p></a></div></div>
    <div class="col-lg-6" ><img class="img-responsive" src="smashburgers.jpg" />
        <div class="top-right"> <a href="#"><p class="one">SmashBurgers</p></a></div></div>
    
    
  </div>

    

</body>
    
    <footer> 
       <?php
    include "footer.php";
        ?>
    </footer>
</html>
