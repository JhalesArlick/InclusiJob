<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include("connection.php");

$userError = $passError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM signup WHERE username='$username' OR email='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['loggedin'] = true;
            $_SESSION['login_success'] = true; // Set the login success session variable
            if ($row['account_type'] == 'admin') {
                header("Refresh: 1; URL=index.php");
    
            }
        } else {
            $passError = "<span class='error'>Password is incorrect!</span>";
        }
    } else {
        $userError = "<span class='error'>Username not registered!</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-image: url("kirito.gif");
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            position: relative;
        }

        #form {
            width: 300px;
            border-radius: 2px; 
            color: whitesmoke;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 60px;
            z-index: 0;
        }

        input, label, .error {
            width: 95%;
            margin-bottom: 10px;
            text-align: left;
        }

        h1 {
            text-align: center;
            color: whitesmoke; 
        }

        #btn {
            width: 100%;
            border-radius: 4px;
            padding: 8px;
            text-align: center; 
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form method="post" name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <?php echo $userError; ?>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            <?php echo $passError; ?>

            <input type="submit" id="btn" name="submit" value="Submit">
            <p>Don't have an account? <a href="signup.php">Sign up here!</a></p>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
</body>
</html>
