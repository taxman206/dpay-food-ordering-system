<?php


session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration'); //select which database wanna use

$name =$_POST['user'];
$lastname =$_POST['lastname'];
$pass =$_POST['password'];
$email =$_POST ['email'];


$s= "select *from usertable where email= '$email'";


$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);
if ($num==1){
    echo "Email already taken";
}
else{
    $_SESSION['name']=$name;
    $_SESSION['lastname']=$lastname;
    $_SESSION['email']=$email;
    $reg="insert into usertable(name,lastname,email,password) values('$name','$lastname','$email','$pass')";
    mysqli_query($con,$reg);
    header('location:Dpayrestuarants.php');
}
    ?>
