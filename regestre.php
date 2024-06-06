<?php
require './PHP/ConexToDb.php'; // Adjust the path as needed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : null;
    $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;
    $confirm_password = isset($_POST['confirm_password']) ? trim($_POST['confirm_password']) : null;

    // Validate data
    if (empty($nom) || empty($prenom) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute SQL query
    try {
        $database = new Database();
        $db = $database->connect();

        $query = "INSERT INTO user (Email_user, Nom_user, Prenom_user, Password_user) VALUES (:email, :nom, :prenom, :password)";
        $stmt = $db->prepare($query);

        // Bind parameters correctly
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':password', $hashed_password);

        if ($stmt->execute()) {
            header("Location: login.PHP");
            exit;
        } else {
            echo "Error: Could not execute the query.";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


}
?>
