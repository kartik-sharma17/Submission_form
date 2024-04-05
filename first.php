<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfull Submitted</title>
</head>
<body>
    <?php
    // connecting to local server
    $servername ="localhost";
    $password = "";
    $username = "root";
    $con = mysqli_connect($servername ,$username ,$password);

    if(!$con){
        die("connection failed :" . mysqli_connect_error());
    }
    // echo "successful connected";

    // fetching details from the html page 
    $name = $_POST['firstName'];
    $phone= $_POST['contact'];
    $email= $_POST['email'];
    $address= $_POST['Address'];
    $feedback= $_POST['feedBack'];


    $sql = "INSERT INTO `form_details`.`details` (`Time`, `name`, `number`, `email`, `address`, `feedback`) VALUES (current_timestamp(),'$name','$phone','$email','$address','$feedback')";
    
    if($con->query($sql) == true){
        echo "data is succesfully inserted";
    }
    else{
        echo "data is not inserted error =",$con->error;
    }
    ?>
    </body>
</html>