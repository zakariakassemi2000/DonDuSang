<?php
// Start session to store user information if login is successful
session_start();
if (isset($_SESSION['user_id']) && isset ($_SESSION['user_email'])){

    header("Location: Formulaire.php");
    exit;
}

$error = ''; // Initialize error variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both email and password are set
    if(isset($_POST['email']) && isset($_POST['password'])) {
        // Retrieve email and password from the form
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Include the Database class
        include './PHP/ConexToDb.php';
        $database = new Database();
        $conn = $database->connect();

        // Prepare SQL statement to select user based on email
        $stmt = $conn->prepare("SELECT * FROM user WHERE Email_user = :email");
        $stmt->bindParam(':email', $email);

        // Execute the query
        $stmt->execute();

        // Fetch the user
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if user exists and password is correct
        if ($user && password_verify($password, $user['Password_user'])) {
            // If user is found and password is correct, store user information in session
            $_SESSION['user_id'] = $user['Id'];
            $_SESSION['user_email'] = $user['Email_user'];

            
            // Redirect user to dashboard or any other page
            header("Location: Formulaire.php");
            exit;
        } else {
            // If user is not found or password is incorrect, display error message
            $error = "Invalid email or password. Please try again.";
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/LoginCss.css">
    <title>Login form - Bedimcode</title>
</head>
<body>

<div class="login">
    <img src="./images/iM12.png" alt="image" class="login__bg">
    <form action="login.php" method="post" class="login__form">
        <h1 class="login__title">Login</h1>
        <div class="login__inputs">
            <div class="login__box">
                <input type="email" name="email" placeholder="Email" required class="login__input">
                <i class="ri-mail-fill"></i>
            </div>
            <div class="login__box">
                <input type="password" name="password" placeholder="Password" required class="login__input">
                <i class="ri-lock-2-fill"></i>
            </div>
        </div>
        <div class="login__check">
            <div class="login__check-box">
                <input type="checkbox" class="login__check-input" id="user-check">
                <label for="user-check" class="login__check-label">Remember me</label>
            </div>
            <a href="#" class="login__forgot">Forgot Password?</a>
        </div>
        <button type="submit" class="login__button">Login</button>
        <div class="login__register">
            Don't have an account? <a href="registre.html">Register</a>
        </div>
        <?php if(isset($error)): ?>
            <div class="login__error"><?php echo $error; ?></div>
        <?php endif; ?>
    </form>
</div>

</body>
</html>
