<?php
include 'config.php';
$uname=mysqli_real_escape_string($connection,$_POST["username"]);
$email=mysqli_real_escape_string($connection,$_POST["email"]);
$balance=mysqli_real_escape_string($connection,$_POST["balance"]);

$sql='select * from users where username="'.$uname.'";';
$rs=mysqli_Query($connection,$sql);
if(mysqli_num_rows($rs)==0)
{
$query="INSERT INTO users(username, email, balance) VALUES ('".$uname."','".$email."',".$balance.");";
if ($connection->query($query) === TRUE) {
  ?>
  <script>
  alert("Data Inserted Successfully!");
  window.location="http://localhost/acm_website/dashboard.php";
  </script>
  <?php
  } else {
    ?>
    <script>
    alert("Problem Connecting to database!");
    window.location="http://localhost/acm_website/admin_insert_h.php";
    </script>
    <?php
    }
  }
  else {
    ?>
    <script>
    alert("Username already exists!");
    window.location="http://localhost/acm_website/admin_insert_h.php";
    </script>
    <?php
    }  
  $connection->close();

?>