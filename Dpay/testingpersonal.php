 <?php

session_start();
?>

<html>
    <head>
        <title>Personal</title>
        <style>.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
  background-color:white;
}
    
* {
  box-sizing: border-box;
}

/* Middle column */
.column.middle {
  width: 40%;
}
            .body{margin:0;}
        
    .row:after {
  content: "";
  display: table;
  clear: both;
}    
        
        </style>
    </head>
    
    
    <body>
        
        <?php
    include "header.php";
        ?>
               <div class="row">
  <div class="column side">
   
  </div>
        
    <div class="column middle">
        <h1> Your Name <?php echo $_SESSION['name']?></h1>
        <h1> Your last name <?php echo $_SESSION['lastname']?></h1>
        <h1> Your Email <?php echo $_SESSION['email']?></h1>
        
            </div>
        
        <div class="row">
  <div class="column side">
   
  </div>
        </div> 
        </div>
    
        
    </body>

        <footer><?php
    include "footer.php";
        ?></footer>


</html>