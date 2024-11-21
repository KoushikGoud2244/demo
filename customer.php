<?php
    include("Connection.php");

    $Email = $_POST['Email'];  
    $psw = $_POST['Psw']; 
    $sql = "SELECT * FROM adminlogin WHERE Email = '$Email' AND password='$psw'";  
    $query = mysqli_query($conn, $sql); 
          
    if(mysqli_num_rows($query)>0){
        header('Location: AAlogin.html');
    }  
    else{  
        echo "<h1> Login failed. Invalid email or password.</h1>";  
    } 
        
?>