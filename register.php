<?php
// Database connection details
$host = "localhost";
$username = "cove";
$password = "Fantabulous1";
$dbname = "nomp";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data and sanitize it
if ($_SERVER["REQUEST_METHOD"] == "POST")
    // Handle form submission
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cohort = $_POST['cohort'];
    $institution = $_POST['university_institution'];
    $course = $_POST['course_of_study'];
    $message = $_POST['message'];

// SQL query to insert data
$sql = "INSERT INTO registrations (name, email, phone, cohort, university_institution, course_of_study, message)
VALUES ('$name', '$email', '$phone', '$cohort', '$institution', '$course', '$message')";

// Execute query
if ($conn->query($sql) === TRUE) {
    // ... (email notification code, as discussed earlier)
    echo "Form submitted successfully!";
} else 
    // If the request method is not POST, you can redirect or handle it accordingly
    echo "Invalid request method!";

$conn->close();
?>
