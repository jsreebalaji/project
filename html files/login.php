<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>TO-LET TRACKING</title>
    <link rel="stylesheet" href="styles/tolet1.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">TOLET TRACKING</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="service.html">SERVICE</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div>
        <div class="content">
            <div class="content">
                <h1>TOLET TRACKING</h1>
                <form method="post" action="login.php">
                  <?php include('errors.php'); ?>
                  <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" >
                  </div>
                  <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password">
                  </div>
                  <div class="input-group">
                    <button type="submit" class="btn" name="login_user">Login</button>
                  </div>
                  <p>
                    Not yet a member? <a href="register.php">Sign up</a>
                  </p>
                </form>
            </div>
        </div>
    </div>
    </div>
    
   
</body>

</html>