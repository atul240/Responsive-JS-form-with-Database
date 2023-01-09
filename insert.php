


<?php


		// servername => localhost
        // username => root
        // password => empty
        // database name => staff
		$conn = mysqli_connect("localhost", "root", "", "javascriptvalidationformdata");

		// Check connection
		if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

		// Taking all 4 values from the form data(input)
        $username =  $_REQUEST['user'];
        $password =  $_REQUEST['password'];
        $mobileno =  $_REQUEST['mobileno'];
        $email = $_REQUEST['email'];


		// Performing insert query execution
        // here our table name is jsformdata

		$sql = "INSERT INTO jsformdata VALUES ('$username', '$password','$mobileno', '$email')";


		if(mysqli_query($conn, $sql)){
            
            echo "<h3>Congratulation...</h3>."
                . " Your registration is Succe'ssful";
                // echo "<script> window.location.assign('xyz.html'); </script>";
                echo "<html><br></html>";
                echo '<html> <form action="newlogin.html"><button type="submit">Go to Login page</button> </form></html>';
                
                 

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
        mysqli_close($conn);

?>


