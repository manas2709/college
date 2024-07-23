<?php
session_start();
include('db_con.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement
    $sql = "SELECT * FROM login WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit();
        } else {
            echo '<script>alert("Wrong credentials");';
            echo 'window.location.href = "login.php";</script>';
            exit();
        }
        
        $stmt->close();
    } else {
        echo "Error in preparing SQL statement: " . $conn->error;
    }
}
?>
