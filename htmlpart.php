<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>JavaScript Form Validation</title>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

            <!-- Popper JS -->
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        </head>
<body>
    

    <div id="id01" class="container"> <br>
        <h1 class="text-success text-center">
            Complete Form Validation in JavaScript
        </h1><br>
        <div class="col-log-8 m-auto d-block">
            <form action="insert.php" onsubmit="return validation()" class="bg-light" method="post">
            
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="user" id="user" class="form-control" autocomplete="off">
                <span id="username" class="text-danger font-weight-bold" name="username"> </span>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="password" class="form-control" autocomplete="new-password"><br>
                <input type="checkbox" onclick="myFunction()" style="margin-left: 10px;">
                <label for="">Show Password</label>
                 <br>
                <span id="passwords" class="text-danger font-weight-bold"> </span>
            </div>

            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" name="conpass" id="conpass" class="form-control" >
                <span id="confirmpass" class="text-danger font-weight-bold"> </span>
            </div>

            <div class="form-group">
                <label for="">Mobile No.</label>
                <input type="text" name="mobileno" id="MobileNumber" class="form-control" >
                <span id="mobno" class="text-danger font-weight-bold"> </span>
            </div>

            <div class="form-group">
                <label for="">Email id</label>
                <input type="email" name="email" id="emails" class="form-control" >
                <span id="mail" class="text-danger font-weight-bold"> </span>
            </div>

            <input type="submit" name="submit" id="" value="Submit" class="btn btn-success"> 
            
            <input type="reset" name="reset" id="" value="Reset" class="btn btn-success float-right"> 

        </div>
    </div>

    <Script type="text/javascript">
        function myFunction() {
         var x = document.getElementById("password");
            if (x.type === "password") {
            x.type = "text";
            } else {
            x.type = "password";
         }
        }



        function validation(){
            // main wali ID yha padegi
            var user = document.getElementById('user').value;
            var password = document.getElementById('password').value;
            var conpass = document.getElementById('conpass').value;
            var mobileno = document.getElementById('MobileNumber').value;
            var emails = document.getElementById('emails').value;
            
         
            if (user == ""){
                // span wali ID yha per di jaa rhi h.
                document.getElementById('username').innerHTML = "Please fill user field";
                return false;
            }

            if((user.length<=2) || (user.length > 20)){
                document.getElementById('username').innerHTML = "Must be between 3 to 20 caracter";
                return false;
            }

            if(password == ""){
                document.getElementById('passwords').innerHTML = "Please Enter Password";
                return false;
            }

            if((password.length <=3) || (password.length > 20)){
                document.getElementById('passwords').innerHTML = "Please use lengthy Password";
                return false;
            }

            if(conpass == ""){
                document.getElementById('confirmpass').innerHTML = "Please Re-Enter Password";
                return false;
            }

            if(password !== conpass){
                document.getElementById('confirmpass').innerHTML = "Password must be same";
                return false;
            }

            if(mobilnon == ""){
                document.getElementById('mobno').innerHTML = "Please Enter Mobile Number";
                return false;
            }

            if (isNaN(mobileno)){    // isNaN -->  is Not a Number
                document.getElementById('mobno').innerHTML = "Characters are not Allowed";
                return false;
            }
            if(mobileno.length !== 10){
                document.getElementById('mobno').innerHTML = "Mobile Number must be 10 digits only";
                return false;
            }

            if(emails == ""){
                document.getElementById('mail').innerHTML = "Please Enter E-mail id ";
                return false;
            }

            if(emails.indexOf("@") == 0){
                document.getElementById('mail').innerHTML = "@ Invalid Position";
                return false;
            }

            if((emails.charAt(emails.length-4) != ".") && (emails.charAt(emails.length-3) != ".") ){
                document.getElementById('mail').innerHTML = "'.' Invalid Position";
                return false;
            }
        }
    </Script>
</body>
</html>