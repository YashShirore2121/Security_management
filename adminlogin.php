<?php
include "connection.php";
     if(isset($_POST['login'])) 
     {
        $uname= $_POST['username'];
        $password = $_POST['password'];

        $query="Select * from admin where name='$uname' and password='$password'";
        $status=mysqli_query($conn,$query);
        $no_of_rows=mysqli_num_rows($status);
        if($no_of_rows)
		{
        echo "<script>alert('Login Successful');</script>";
        echo "<script>window.location='ahome.php'</script>";
		}
    else{
        echo "<script>alert('Login Failed');</script>";
        echo mysqli_error($conn);
		}
     }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminlogin</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
  include "menu.html";
?>
    <div class="form">
        <p> Admin Login</p>
        <form action="" method="post">
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" required>
            <button name="login">login</button>
            <p class="message">Not registered? <a href="adminregister.php">Create an account</a></p>
        </form>
        </div>
</body>
</html>