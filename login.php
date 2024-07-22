<?php
session_start();

// Database configuration
$servername = "localhost"; 
$username = "root";       
$password = "";            
$dbname = "zoo_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];
    
    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, username, password, nom, prenom, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $inputUsername);
    $stmt->execute();
    $stmt->store_result();

    // Check if username exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashedPassword, $nom, $prenom, $role);
        $stmt->fetch();

        // Verify password
        if (password_verify($inputPassword, $hashedPassword)) {
            // Password is correct, start a session and set session variables
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['role'] = $role;
            
            // Redirect to a protected page (e.g., dashboard.php)
            header("Location: index.html");
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }

    $stmt->close();
}

$conn->close();
?>
