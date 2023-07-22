<?php
include "connection.php";
?>
<html>

<head></head>
<style>
    body {
        background-color: white;

    }

    h1 {
        text-align: center;
        color: orange;

    }

    label {
        width: 100px;
        display: inline-block;
        margin: 4px;
        font-size: 16px;
        font-weight: bold;
    }

    .container {

        position: absolute;
        
        margin: 20px 400px;
        background-color: rgb(96, 99, 99);
        border: 10px solid orange;

        border-radius: 20px;
        padding: 10px 40px;
        width: 450px;
        height: 630px;

    }

    input {
        padding: 5px;
        margin: 5px;
        font-size: 16px;
        border-radius: 10px;
        border: 1px solid #f9f9f9;
        width: 7cm;
    }

    input#submit {

        margin-top: 7px;
        display: grid;
        position: relative;
        height: 40px;
        width: 50%;
        color: white;
        font-weight: bold;
        padding: 4px;
        text-align: center;
        background-color: dodgerblue;
    }

    input#submit:hover {
        background-color: green;
        color: #f9f9f9;
    }
</style>

<body>
    <form action="save.php" method="POST">
        <div class="container">

            <?php

            $x = htmlspecialchars($_GET['id']);
            echo "$x";

            $q = "select * from user where id=$x";
            echo "$q";
            $result = mysqli_query($conn, $q);

 
            while ($line = mysqli_fetch_assoc($result)) {
                $id = $line['id'];
                $name = $line['name'];
                $e = $line['email'];
                $g = $line['gender'];
                $no = $line['mobile'];
            }
            echo "<h1>Update Profile</h1><br><br>";
            echo " 

<label>Name :</label>
<input type=text name=name value=$name>
<br>
<input type=hidden  name=id value=$id>

<br>

<label> Email id:</label>
<input type=Email name=Email value=$e>
<br>
<br>

<label> Gender :</label>

<input type=text name=Gender value=$g > 

<br>
<br>
<label> Mobile no :</label> <input type=tel name=Mobile value=$no>

<br>
<br>

<input type=submit value=Update id=submit>
    
    
    
      ";
            mysqli_close($conn);
            ?>

        </div>

    </form>
</body>

</html>