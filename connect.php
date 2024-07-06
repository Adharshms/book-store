<html><title>book store</title>
<style>
  button{
    font-size: 20px;
  }
  h1{
    font-size: 25px;
  }
</style>
<link rel="stylesheet" href="dbms.css">
   <body bgcolor=" green">
    <h1 class="fon">data is inserted in the table</h1>
    <form action="page2.php">
    <button type="submit" >tap to continue</button>
  </form>
 
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinebookstore";
// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if (mysqli_connect_error()) {
     echo "failedd to connect";
     exit();
  }
  $userid = $_REQUEST['userid'];
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];
  $email = $_REQUEST['email'];


  $sql = "INSERT INTO user VALUES ('$userid',
  '$username','$password','$email')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
                

    
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>

