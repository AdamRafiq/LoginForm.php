<?php
require 'connection.php';

if (isset($_POST['update'])) {
    // Check if the 'Id' key is present in $_POST
    if (isset($_POST['Id'])) {
        $Id = $_POST['Id'];
        $Kelulusan = 0; // Updated value for Disemak column

        // Update data in the database
        $sql = "UPDATE permohonan SET Kelulusan='$Kelulusan' WHERE Id='$Id'";

        if ($conn && $conn->query($sql) === TRUE) {
            header("Location: approver.php");
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Missing 'Id' in the form submission.";
    }
}

// Close the connection
$conn->close();
?>
