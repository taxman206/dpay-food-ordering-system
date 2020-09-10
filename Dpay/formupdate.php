<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;

}

/* Style the topnav links */
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

/* Create three unequal columns that floats next to each other */
.column {
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
input[type=text] {
  width: 45%;
  padding: 10px;
             border-radius: 4px;
  resize: vertical;
  
}
         input[type=password] {
  width: 45%;
  padding: 10px;
             border-radius: 4px;
  resize: vertical;
  
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
    margin-top: 120px;
  

}
</style>
</head>
<body>

<div class="header">
  <h1>DPAY</h1>
  <p>Register Account</p>
</div>

<div class="topnav">
   <a href="login.php">Log In</a>
  
</div>

<div class="row">
  <div class="column side">
   
  </div>
  
  <div class="column middle">
           
                
        
<form  method="post" action="registration.php"> 
    
<label for="First Name">Enter your First name:</label>
<input type="text" name="user" class="form-control"required><br> 
    

    <label for="Last Name">Enter your Last name:</label> 
    <input type="text" name="lastname" class="form-control"required><br>
    
    
     <label for="address">Enter your Email :</label> 
    <input type="email" name="email" class="form-control"required><br>
    
    <label for="password">Enter your password:</label> 
    <input type="password" name="password" class="form-control"required><br>
    
    
    
        <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
     <button type="submit" class="btn btn-primary">Register</button>
</form>
    </div>
  
  <div class="column side">
    
  </div>
</div>

   
</body>
    <footer> <?php
    include "footer.php";
        ?>
    </footer>
</html>
