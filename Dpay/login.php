<html>
<head>
    
    <title>User Login and Registration</title>
    <link rel="stylesheet" type="text/css"
          href=https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css>
     <style>
         
         .login-box{
             max-width: 700px;
             float:none;
             margin:150px auto;
         }
         
         .form-control{
             background-color: transparent !important;
         }
    
         .login-left{
             background: rgba(211,211,211,0.5);
             padding: 30px;
         }
         

         
    </style>
    
    </head>
    
    
    <body>
          
          
          
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6" login-left>
            <h2>Login</h2>
            <form action="validation.php" method="post">
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email" class="form-control" required></div>
                
                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                            
            </form>
            

            </div>
                </div>
    
        </div>
        </div>
    </body>

<footer> <?php
    include "footer.php";
        ?>
    </footer>
</html>