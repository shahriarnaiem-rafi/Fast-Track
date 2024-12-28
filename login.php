<?php
session_start();
$database = mysqli_connect("localhost", "root", "", "fasttrack");

if (isset($_POST["loggedin"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    try {
        $check = $database->prepare("SELECT * FROM registration WHERE email= ?");
        $check->bind_param("s", $email);
        if ($check->execute()) {
            $output = $check->get_result();
            $user = $output->fetch_assoc();
        }
        if ($user) { // Check if user exists
            if (password_verify($password, $user['password'])) {
                // Set session variables
                $_SESSION['user-id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                header("Location:./adminpannel/main.php");
                exit();
            } else {
                $error_massage = "Invalid password. Try again.";
            }
        } else {
            $error_massage = "No account found. Try again.";
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
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <form action="#" method="post">
        <h2>Login</h2>
        <!-- Display error message if exists -->
        <?php if (isset($error_massage)): ?>
            <div class="error-message"><?php echo $error_massage; ?></div>
        <?php endif; ?>
        
        <label for="email">Email</label>
        <input type="text" placeholder="Enter your email" name="email" required><br>

        <label for="password">Password</label>
        <input type="password" placeholder="Enter your password" name="password" required><br>

        <input type="submit" name="loggedin" value="Log in">
    </form>

</body>

</html>
