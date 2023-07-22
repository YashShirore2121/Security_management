
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
</head>
<body>
    <style>
        

*,html,body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,label,fieldset,input,p,blockquote,th,td {
    margin: 0;
    padding: 0;
}

article,aside,figure,footer,header,hgroup,nav,section {
    display: block;
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

html {
    -webkit-font-smoothing: antialiased;
}

a {
    color: #BA0707;
    text-decoration: none;
}

a:hover {
    color: #BA0707;
}

body {
    background: #e5e5e5;
    color: #374147;
    font: 14px "Open Sans",Helvetica,Arial,sans-serif;
    -webkit-font-smoothing: antialiased;
    line-height: 1;
    width: 100%;
}

nav {
    display: block;
    background: #374147;
}

.menu {
    display: block;
}

.menu li {
    display: inline-block;
    position: relative;
    z-index: 100;
}

.menu li:first-child {
    margin-left: 0;
}

.menu li a {
    font-weight: 600;
    text-decoration: none;
    padding: 20px 15px;
    display: block;
    color: #fff;
    transition: all 0.2s ease-in-out 0s;
}

.menu li a:hover,.menu li:hover>a {
    color: #fff;
    background: #9ca3da;
}

.menu ul {
    visibility: hidden;
    opacity: 0;
    margin: 0;
    padding: 0;
    width: 170px;
    position: absolute;
    left: 0px;
    background: #fff;
    z-index: 99;
    transform: translate(0,20px);
    transition: all 0.2s ease-out;
}

.menu ul:after {
    bottom: 100%;
    left: 20%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(255, 255, 255, 0);
    border-bottom-color: #fff;
    border-width: 6px;
    margin-left: -6px;
}

.menu ul li {
    display: block;
    float: none;
    background: none;
    margin: 0;
    padding: 0;
}

.menu ul li a {
    font-size: 12px;
    font-weight: normal;
    display: block;
    color: #797979;
    background: #fff;
}

.menu ul li a:hover,.menu ul li:hover>a {
    background: #9ca3da;
    color: #fff;
}

.menu li:hover>ul {
    visibility: visible;
    opacity: 1;
    transform: translate(0,0);
}

.menu ul ul {
    left: 169px;
    top: 0px;
    visibility: hidden;
    opacity: 0;
    transform: translate(20px,20px);
    transition: all 0.2s ease-out;
}

.menu ul ul:after {
    left: -6px;
    top: 10%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(255, 255, 255, 0);
    border-right-color: #fff;
    border-width: 6px;
    margin-top: -6px;
}

.menu li>ul ul:hover {
    visibility: visible;
    opacity: 1;
    transform: translate(0,0);
}

.responsive-menu {
    display: none;
    width: 100%;
    padding: 20px 15px;
    background: #374147;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
}

.responsive-menu:hover {
    background: #374147;
    color: #fff;
    text-decoration: none;
}

a.homer {
    background: #9ca3da;
}

@media (min-width: 768px) and (max-width: 979px) {
    .mainWrap {
        width: 768px;
    }

    .menu ul {
        top: 37px;
    }

    .menu li a {
        font-size: 12px;
    }

    a.homer {
        background: #374147;
    }
}

@media (max-width: 767px) {
    .mainWrap {
        width: auto;
        padding: 50px 20px;
    }

    .menu {
        display: none;
    }

    .responsive-menu {
        display: block;
    }

    nav {
        margin: 0;
        background: none;
    }

    .menu li {
        display: block;
        margin: 0;
    }

    .menu li a {
        background: #fff;
        color: #797979;
    }

    .menu li a:hover,.menu li:hover>a {
        background: #9ca3da;
        color: #fff;
    }

    .menu ul {
        visibility: hidden;
        opacity: 0;
        top: 0;
        left: 0;
        width: 100%;
        transform: initial;
    }

    .menu li:hover>ul {
        visibility: visible;
        opacity: 1;
        position: relative;
        transform: initial;
    }

    .menu ul ul {
        left: 0;
        transform: initial;
    }

    .menu li>ul ul:hover {
        transform: initial;
    }
}

@media (max-width: 480px) {
}

@media (max-width: 320px) {
}
    </style>
<nav>
<a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>    
   <ul class="menu">
   <li><a class="homer" href="ahome.php"><i class="fa fa-home"></i> HOME</a>
   <!-- <ul class="sub-menu">
   <li><a href="#">Sub-Menu 1</a></li>
   <li><a href="#">Sub-Menu 2</a></li>
   <li><a href="#">Sub-Menu 3</a></li>
   <li><a href="#">Sub-Menu 4</a></li>
   <li><a href="#">Sub-Menu 5</a></li>   
   </ul> -->
   </li>
  <li><a  href="viewuser.php"><i class="fa fa-user"></i> View User</a></li>
  <li><a  href="addlocation.php"><i class="fa fa-camera"></i> Update Location</a>
  <ul class="sub-menu">
   <li><a href="addlocation.php">Add Location</a></li>	
    </ul>
   </li>
   <li><a  href="#"><i class="fa fa-camera"></i> view Location</a>
  <ul class="sub-menu">
   <li><a href="viewlocation.php">location </a></li>	
    </ul>
   </li>
   </ul>
  </li>
  
  </ul>
  </nav>
  <script>
    $(document).ready(function(){ 
	var touch 	= $('#resp-menu');
	var menu 	= $('.menu');
 
	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var w = $(window).width();
		if(w > 767 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
	
});
</script>
</body>
</html>