<html>
    <head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <!-- <link rel="stylesheet" href="./navbar.css"> -->
  <!-- <script defer  src="./script.js"></script> -->
  <!-- <link rel="stylesheet" href="./table.css"/> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    .title
    {
        text-align: center;
    }
</style>
<body>
  
</body>
<div style="clear:both"></div>
    <br />
    <h3 align="center" class="m-4 text-danger font-weight-light">Order Details</h3>
    <div class="table-responsive">
<?php
include "connection.php";
if($conn)
{
    $query="SELECT * FROM location";
$result=mysqli_query($conn,$query);
$cnt=mysqli_num_rows($result);

if($cnt>0)
{
    ?>
    <table class="table table-bordered border border-danger">
            <tr>
    
                            <th class="title" scope="col">Location Name</th>
                            <th class="title" scope="col">Guard Name</th>
                            <th class="title" scope="col">MobileNo</th>
                            <th class="title" scope="col">Edit</th>
                            <th class="title" scope="col">Delete</th>
      </tr>

    <?php
    while($line=mysqli_fetch_assoc($result))
    {
        $elink="<a href=''>Update</a>";
        $dlink="<a href=''>Delete</a>";
        ?>
         <tr>
                               
                                <td class="table-data">
                                <?php echo $line['location_name']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['Guard_name']; ?>
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

















    