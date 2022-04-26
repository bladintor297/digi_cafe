<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
   <?php
     session_start();

        $name = $_POST["name"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $email = $_POST["email"]; 
        $phone = $_POST["phone"];
        $pax = $_POST["pax"];  

        require_once ("config.php"); //call config.php to open connection to database before performing insert data
        $sql = "INSERT INTO booking(name, bookDate, bookTime, phone, email, pax) VALUES ('$name','$date','$time', '$phone', '$email', '$pax')" ;

        if (mysqli_query($conn, $sql)){
            $_SESSION['count']=1;
        }
        
        
        header("Location: ../../index.php");
    
    ?>

</body>
</html>
