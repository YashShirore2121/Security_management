<?php
include "ahome.php";
?>
<html>
    <head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <!-- <link rel="stylesheet" href="./navbar.css"> -->
  <!-- <script defer  src="./script.js"></script> -->
  <!-- <link rel="stylesheet" href="./table.css"/> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  
</body>
<div style="clear:both"></div>
    <br />
    <h3 align="center" class="m-4 text-danger font-weight-light">User Details</h3>
    <div class="table-responsive">
<?php
include "connection.php";
if($conn)
{
    $query="SELECT * FROM user";
$result=mysqli_query($conn,$query);
$cnt=mysqli_num_rows($result);

if($cnt>0)
{
    ?>
    <table class="table table-bordered border border-danger">
    
    <tr>
    
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">MobileNo</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
      </tr>

    <?php
    while($line=mysqli_fetch_assoc($result))
    {
        $elink="<a href=update.php?id=".$line['id'].">Update</a>";
        $dlink="<a href=delete.php?id=".$line['id'].">Delete</a>";
        ?>
         <tr>
                               
                                <td class="table-data">
                                <?php echo $line['name']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['email']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['gender']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['mobile']; ?>
                        </td>

                                <td class="table-data">
                                    <?php echo $elink; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $dlink; ?>
                        </td>
                        </tr>
      </tr>
    <?php
    }
    
}
}
else{
    die('Connection failed'.mysqli_error($conn));
}

mysqli_close($conn);
?>    
</table>
</div>
    </html>
