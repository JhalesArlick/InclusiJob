<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: register.php");
    exit;
}

include("connection.php");

$userError = $emailError = $passError = $generalError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
    $account_type = mysqli_real_escape_string($conn, $_POST['account_type']);

    $sql = "SELECT * FROM signup WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "SELECT * FROM signup WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_user == 0 && $count_email == 0) {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO signup (username, email, password, account_type) VALUES ('$username', '$email', '$hash', '$account_type')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $_SESSION['register_success'] = "Registration successful!";
                header("Location: login.php");
                exit;
            } else {
                $generalError = "Error in registration!";
            }
        } else {
            $passError = "Passwords do not match!";
        }
    } else {
        if ($count_user > 0) {
            $userError = "Username already exists!";
        }
        if ($count_email > 0) {
            $emailError = "Email already exists!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Register</h2>
    <button onclick="openModal()">Register</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Register</h2>
            <form name="form" action="register.php" method="POST">
                <label>Enter Username: </label>
                <input type="text" id="user" name="user" required>
                <span class="error"><?php echo $userError; ?></span><br><br>
                
                <label>Enter Email: </label>
                <input type="email" id="email" name="email" required>
                <span class="error"><?php echo $emailError; ?></span><br><br>
                
                <label>Create Password: </label>
                <input type="password" id="pass" name="pass" required><br><br>
                
                <label>Confirm Password: </label>
                <input type="password" id="cpass" name="cpass" required>
                <span class="error"><?php echo $passError; ?></span><br><br>
                
                <label>Account Type: </label>
                <select id="account_type" name="account_type" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select><br><br>

                <input type="submit" id="btn" value="SignUp" name="submit"/>
                <p>Already have an account? <a href="login.php">Log in here!</a></p> 
            </form>
            <?php
            if ($generalError) {
                echo '<p class="error">' . $generalError . '</p>';
            }
            if (isset($_SESSION['register_success'])) {
                echo '<p style="color: green;">' . $_SESSION['register_success'] . '</p>';
                unset($_SESSION['register_success']);
            }
            ?>
        </div>
    </div>

    <script>
        var modal = document.getElementById("myModal");

        function openModal() {
            modal.style.display = "block";
        }

        function closeModal() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        <?php
        if (isset($_SESSION['register_success'])) {
            echo 'openModal();';
        }
        ?>
    </script>
</body>
</html>
