<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * from jsformdata where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1) { 
            ?> 
          
            <form action="xyz.php" method="POST">  
                <label for=""></label>
           <?php
              // echo "<h1><center>WELCOME $username ji 😊😊</center></h1> "
              $msg = 'Login Complete! Thanks';
              echo "<script> window.location.assign('xyz.html'); </script>";
           ?>
           <!-- <input type="submit" value="Register"/>  -->
          </form> 
            
        <?php
        }
        else{
          ?>
            <h1> Login failed. Invalid username or password. 😌😌</h1>  
          <?php   
          }
?>  