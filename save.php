<html>
<head> <title>updated data</title>
<script type="text/javascript">
function delayer()
{
        alert("updated successfully");
        window.location = "viewuser.php";
    
}
</script>
</head>
<body onLoad="setTimeout('delayer()',1000)">
<h3> Saving Entry</h3>
<?php
$con=mysqli_connect("localhost","root","","security");
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["Email"];
$gender=$_POST["Gender"];
$no=$_POST["Mobile"];

$q="UPDATE user SET name='$name',email='$email',gender='$gender',mobile=$no WHERE id=$id ";
mysqli_query($con,$q);
mysqli_close($con);
 ?>
</body>
</html>