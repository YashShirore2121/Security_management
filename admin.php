<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
	<style>
		.navbar ul li{
	list-style-type: none;
	display: inline-block;
	height:100%;
	width:auto;
	border:1px solid rgba(255, 255, 255, 0.88);
	border-radius:2px ;
	cursor: pointer;
	padding:10px;
	box-shadow:0px 0.5px 5px rgba(0, 0, 0, 0.2);
	transition: 0.1s ease-in-out;
	box-sizing: border-box;
}
 .navbar ul li a{
	color:#fff;
	text-align: center;
	text-decoration: none;
	font-family:'cinzel',sans-serif;
	font-size:15px;
	font-weight:300;
	display: block;
}
 .navbar ul li:hover{
	background:rgba(0, 0, 0, 0.4);
}
.log{
    height: 100px;
    width: 100px;
	margin-left:  30%;

}
.navbar {
	position: relative;
	height:auto;
	width:20%;
	
	float:left;
	font-family:'Lato',sans-serif;
	font-size:35px;
	font-weight:600;
	cursor: pointer;
	text-shadow:0px 0.5px 5px rgba(0, 0, 0, 0.2);
	transition: 0.1s ease-in-out;
}
.navbar{
    top:0%;
	position: absolute;
	height:auto;
	width:100%;
	margin:2% 0;
	display: flex;
	align-items: center;
	overflow: hidden;
	padding:10px 0;
}
.navbar  ul{
	position: relative;
	float:right;
	width:50%;
	right:-14%;
	height:auto;
	margin:auto;
}
	</style>
</head>
<body> 
<div class="navbar">
			<div >
                <img  class="log" src="R.png" alt="">
             </div>
                
           
			<ul>
				<li><a href="admin.php">HOME</a></li>
				<li><a href="viewuser.php">viewuser</a></li>
				<li><a href="adminlogin.php">updatelocation</a></li>
				<!-- <li><a href="#">PORTFOLIO</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">CONTACT US</a></li> -->
			</ul>
		</div>
    
</body>
</html>