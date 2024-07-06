
<!DOCTYPE html>
<html>
<head>
<? include "page2.php" ?>
<link rel="stylesheet" href="login.css">
<style>
  
</style>
<body >

<h2>Login Form</h2>
 
<form  action="page2.php" method="POST">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>    
    <form action="page2.php" method="post">
 
</form>
<button class="all" type="submit">login</button>

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  <div class="container" style="background-color:black">
    <button type="button" class="cancelbtn">Cancel</button>
    <div class="all"> <span><a href="login.php">sign up</a></span></div>
  </div>
</form>
</body>
</html>
<? include "login.php" ?>
<? include "connect.php" ?>
