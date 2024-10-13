<?php


try {
    // Create a PDO instance
    $conn = new PDO("mysql:host=sql204.infinityfree.com;dbname=if0_37502648_employee_db", 'if0_37502648', 'Hoanghung20004');
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optionally: echo 'Server Connected Successfully'; // Uncomment for testing
} catch (PDOException $e) {
    // Handle connection errors
    die("Connection failed: " . $e->getMessage());
}
?>


