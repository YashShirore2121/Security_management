
<?php
 
 include "ahome.php";
include "connection.php";
    if(isset($_POST['add_location']))
    {
        $location=$_POST['location'];
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];

        $query="insert into location (location_name, guard_name, mobile) values('$location','$name','$mobile')";
        $status=mysqli_query($conn,$query);
        if($status)
            {
            echo "<script>alert('Add Successful')</script>";
            echo "<script>window.location='viewlocation.php'</script>";
            }
        else{
            echo "<br>Registration failed<br>";
            echo mysqli_error($conn);
            }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="rstyle.css">
    <script src="https://kit.fontawesome.com/f6816dd194.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login-page">
        <h1>Add Location</h1>
        <form method="post">
            <input type="text" name="location" id="" placeholder="Add Location Name">
            <input type="text" name="name" id="" placeholder="Enter Guard Name">
            <input type="number" name="mobile" id="" placeholder="Enter Mobile No.">
            <button type="submit" name="add_location" class="btn">Add</button>
        </form>
    </div>
</body>
</html>