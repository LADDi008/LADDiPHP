<?php
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phonenumber'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    echo "<center><h2>You have submitted successfully</h2></center><br/>";
    echo"<center><h3>You have entered as follow<center></h3><br/>";
    echo "<center>First name : ".$firstname."</center><br/>";
    echo "<center>Last name : ".$lastname."</center><br/>";
    echo "<center>Phone number : ".$phone."</center><br/>";
    echo "<center>Email : ".$email."</center><br/>";
    echo "<center>City : ".$city."</center><br/>";
    
}
?>