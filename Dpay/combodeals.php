<?php

session_Start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'products');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Combo Deals</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        
         <?php
    include "header1kama.php";
        ?>
    
    <br/>
    
    
        <h1 class="text-center">Chicken Wings</h1>

        <div class="container" style="width:700px" id="0";>        
 
        <?php
        $query= "SELECT * FROM tbl_prodcombo ORDER BY id ";
        $result= mysqli_query($con, $query);
        if (mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_array($result))
            {
                ?>
         
            
    <div class="col-md-4">
        
      
            <form method="post" action="combodeals.php? actionadd&id=<?php echo $row["id"]; ?>">
             <div style="border:1px solid #333;background-color:#f1f1f1;border-radius:5px; padding:16px;" align="center">

               <img src="<?php echo $row["prodimg"];?>" class="img-responsive" /><br/>
        <h4 class="text-info"><?php echo $row["prodname"];?></h4>
            <h4 class="text-danger">$<?php echo $row["prodprice"];?></h4>
            <input type="text" name="quantity" class="form-control" value="1"/>
          <button type="submit" class="btn btn-primary">Add to cart</button>
                      
                </div>
                
                
                
                
                
                
                
                
        </form>
        </div>
    
        <?php
            }
        }
        ?>        
        
        </div>
    <br/>
    
       
    
    </body>
    <footer> <?php
    include "footer.php";
        ?>
    </footer>
</html>
        
        
        
       