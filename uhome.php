<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uhome</title>
</head>

<style>
    
    button {
        align-content: center;
        display: inline ;
        /* background-attachment: fixed; */
        background-color:lightseagreen;
        border-radius: 10px;
        /* margin-top: 26%;
        margin-left: 45%; */
        height: 40px;
        width: 100px;
        padding: 7px;
        position: absolute;
        
    }
   a{
    text-decoration: none;
    color: black;
   }
   .img{
 
 justify-content: center;
 height: 100vh;
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   opacity: 100%;
   background-attachment: fixed;
  
}
h3{
    position: absolute;
    margin-bottom: 12%;
  /* margin-left: 42%; */
  color: aliceblue;
}
   .show{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
   }
</style>

<body >
    <div>
    <div class="show">
   <h3> want to see location of securitys </h3>
    <button> <a href="uview.php">view Location </a> </button>
    
    <img  class="img" src="watchman.png" alt="image">
    </div>
    </div>
</body>
</html>