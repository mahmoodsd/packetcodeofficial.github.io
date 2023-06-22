<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);

$conn->set_charset("utf8");

//  // POST the form data

$firstname = $_POST['name'];
$lastname = $_POST['date'];
$email = $_POST['email'];
$password = $_POST['gender'];
$country = $_POST['department'];
$status = $_POST['status'];





//sql query
$sql = "INSERT INTO freelancer_tb ( F_first_name , F_last_name , F_email, F_password , F_country , status)
         VALUES ( '$firstname' , '$lastname' , '$email' , '$password' , '$country' , '$status');";

// $sql .= "INSERT INTO login_tb (email, passwordd)
//         SELECT F_email , F_password FROM freelancer_tb
//         WHERE F_email = '$email' AND F_password = '$password'; ";

//check sql process
if (mysqli_query($conn, $sql)) {
// echo "good day";
//   echo "<script>alert('add information successful')</script>";
//  header("refresh:1;url = register.php?id=$id");
header("refresh:1;url = dashboard.php");

 exit;

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


// if(isset($_POST['button'])) {
//   extract($_POST);
        
//   $sql = mysqli_query($conn, "INSERT INTO freelancer_tb ( F_first_name , F_last_name , F_email, F_password , F_country)
//      VALUES ( '$firstname' , '$lastname' , '$email' , '$password' , '$country');");
                              
//   if($sql) {           
//     $id = mysqli_insert_id($conn); // get the ID of the newly inserted row
//     header("refresh:2;url= create_profile.php?id=$id"); // redirect the user to the profile page
//   } else {
//     $message = "Error: " . mysqli_error($conn); // display the error message
//   }
// } else {
//   $message = "Please complete all fields!";
// }


?>






