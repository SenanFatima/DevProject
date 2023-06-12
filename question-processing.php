<?php
// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$question = $_POST['question'];

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "devweb";

// Create a new PDO instance
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement to insert the question into the database
    $stmt = $conn->prepare("INSERT INTO questions (name, email, question) VALUES (:name, :email, :question)");

    // Bind the parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':question', $question);

    // Execute the statement
    $stmt->execute();

    echo "Question submitted successfully!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>