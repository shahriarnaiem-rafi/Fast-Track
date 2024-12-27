<?php
session_start();
$database = mysqli_connect("localhost", "root", "", "fasttrack");

if (isset($_POST["loggedin"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];



    try {
        $check = $database->prepare("SELECT * FROM registration WHERE  email= ?");
        $check->bind_param("s", $email);
        if ($check->execute()) {
            $output = $check->get_result();
            $user = $output->fetch_assoc();
        }
        if ($user) {// ai user ki ace ki na
                if (password_verify($password, $user['password'])) {
                    //set session 
                    $_SESSION['user-id'] = $user['id'];
                    $_SESSION['email'] = $user['email'];
                    header("location:Adminpannel.php");
                    exit();
    
                } else {
                    $error_massage = "invalid pass.. try again";
                }
        }
        else{
            $error_massage = "no acount found.. try again";
        }
    } catch (Exception $e) {
        $error_massage = "Error: " . $e->getMessage();
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Form</title>
</head>

<body>

    <form action="#" method="post">

        email
        <input type="text" placeholder="enter your email" name="email" required><br>
        <?php 
            if(!($email==$email)){
                echo "email";
            }
        ?>
        password
        <input type="password" placeholder="enter your password" name="password">
        <?php 
            if(!($password==$password)){
                echo "pass";
            }
        ?>

        <input type="submit" name="loggedin" value="Log in">


    </form>

</body>

</html>