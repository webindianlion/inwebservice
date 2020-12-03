<?php 
$host="localhost";
$user="root";
$password="";
$db="inwebservice";

$cname=$_POST['cname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$conn = new mysqli($host,$user,$password,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  else {
      
  }
  $sql = "INSERT INTO contact (cname, email, mobile) VALUES ('$cname', '$email', '$mobile')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  header( "refresh:2; url=contact.php" );

?>




<!DOCTYPE html>
<html>
<?php include './common/head.php' ?>
<body>
    <?php include './common/topmenu.php' ?>
    <div class="containerr videoContainer"> <br><br><br><br><br><br><br>
        <h1 class="successMessage">We will connect you soon</h1>       
    </div>


</body>
</html>