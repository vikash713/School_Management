<?php include "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // if (isset($_POST['data'])) {
        //$data = $_POST['data'];
        echo "name is : ".$_POST['fname'];
        // run sql query
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        // password 
        $sql = "UPDATE form SET fname=?, lname=?, password=?, email=?, phone=?, address=? WHERE id=?";

        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssi", $fname, $lname, $password, $email, $phone, $address, $id);

        // Execute update query
        if ($stmt->execute()) {
            echo "Record updated successfully";
            // Optionally, redirect to another page after successful update
            // header("Location: updated_successfully.php");
            // exit();
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        //echo "Received Data: " . htmlspecialchars($data);

} else {
    echo "Invalid request method.";
}
?>