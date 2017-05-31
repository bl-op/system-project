<!DOCTYPE html>
<html>
    <head>
        <title>CariFund</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources\css\stylesheet.css">
        <style>
        .categorymenu {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
            overflow-y: hidden;
            transition: 0.5s;
        }
        
        .contents {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .categorymenu a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .categorymenu a:hover, .categorymenu a:focus {
            color: #f1f1f1;
        }

        .categorymenu .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
        .categorymenu {overflow-y: auto;}
        .categorymenu a {font-size: 20px}
        .categorymenu .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
            }
        }
    </style>
    </head>
    <body>
        <header>
        <div class="navibar">
            <ul>
                <li><a href="signup.html">Sign Up</a></li>                
                <li><a href="login.html">Login</a></li>
                <li><a href="#">About</a></li>
                <li><a href="carifund.php">Home</a></li>
            </ul>
        </div>
        </header>
        <div class="category">
            <div id="categorymenu" class="categorymenu">
            <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&times;</a>
            <div class="contents">
            <a href="#">Poverty</a>
            <a href="#">Education</a>
            <a href="#">Health</a>
            <a href="#">Animals</a>
            <a href="#">Environment</a>
            <a href="#">Others</a>
            </div>
        </div>

<button class="btn" style="font-size:25px" onclick="openMenu()">Explore Categories</button>
        
        <div class="info">


          	<table style="width:100%" class="info_table">
                	<tr>
                    	<th>Connect with Us</th>
                    	<th><a href="#" style="color:white; text-decoration:none;">About</th>
                    	<th><a href="#" style="color:white; text-decoration:none;">FAQ</a></th>
                    	<th><a href="#" style="color:white; text-decoration:none;">Discover</a></th>
                   	 
                	</tr>
                 	<tr>
                     	<td><a href="emailus.html" style="color:white; text-decoration:none;">Email</a></td>
                 	</tr>
                 	<tr>
                     	<td><a href="https://www.facebook.com/" style="color:white; text-decoration:none;">Facebook</a></td>
                 	</tr>
            	</table>
                
        </div>
    </body>
</html>

<script>
function openMenu() {
    document.getElementById("categorymenu").style.height = "100%";
}

function closeMenu() {
    document.getElementById("categorymenu").style.height = "0%";
}
</script>