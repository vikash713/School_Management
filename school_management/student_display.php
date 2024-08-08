<html>
  <head>
    <title>DISPLAY</title>
    <style>
      body
      {
        background-color:53b6e1
      }
      table
      {
        background-color:aliceblue
      }
    </style>
  </head>
<?php
  include("connection.php");
  error_reporting(0);
  if(isset($_POST['Add'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if ($fname != "" && $lname != "" && $password != "" && $conpassword != "" && $gender != "" && $email != "" && $phone != "" && $address != "") {
      $query = "INSERT INTO student (fname, lname, password, cpassword, gender, email, phone, address) VALUES ('$fname', '$lname', '$password', '$conpassword', '$gender', '$email', '$phone', '$address')";
      $data = mysqli_query($conn, $query);
    //   $total = mysqli_num_rows($data);
      if ($data) {
        echo "Inserted successfully!";
      } else {
        echo "Failed to insert.";
      }
    } else {
      echo "Please insert all details.";
    }
  }
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
         $sql = "UPDATE student SET fname=?, lname=?, password=?, email=?, phone=?, address=? WHERE id=?";
 
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

  $query="SELECT * FROM student";
  $data= mysqli_query($conn, $query);

  $total = mysqli_num_rows($data);
  $studentData=mysqli_fetch_assoc($data);
//   print_r($studentData);exit;
   //$result=mysqli_fetch_assoc($data);- it was showing error bcz 1st row was not printing

   
// $studentId=$studentData['id'];
// print_r($studentId);exit;


  if($total !=0)
  {
    ?>
    <h2 align="center"><mark>DISPLAYING STUDENT RECORD</mark></h2>
     <center><table border="3" cellspacing="7" width="85%">
        <tr>
        <th width="5%">Id</th>
         <th width="10%">First Name</th>
         <th width="10%">Last Name</th>
         <th width="10%">Password</th>
         <th width="10%">Gender</th>
         <th width="10%">Email Id</th>
         <th width="10%">Phone Number</th>
         <th width="10%">Address</th>
         <th colspan="3" width="10%">Operations</th>
         </tr>

    
    <?php
    while($result=mysqli_fetch_assoc($data))
    {
      
      echo "<tr>
              <td>".$result['id']."</td>
              <td>".$result['fname']."</td>
              <td>".$result['lname']."</td>
              <td>".$result['password']."</td>
              <td>".$result['gender']."</td>
              <td>".$result['email']."</td>
              <td>".$result['phone']."</td>
              <td>".$result['address']."</td>   

              <td>
              <a href='studentupdate_detail.php?result=".json_encode($result)."'>update </a>
              </td>

              <td>
              <a href='studentadd_detail.php'>Add </a>
              </td>
              <td>
              <a href='studentdelete_detail.php'>Delete </a>
              </td>

            </tr>";
    }
  }
   else
    {
     "no record found";
    }
?>
</table>
</center>
