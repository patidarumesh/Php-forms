<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style-1.css" type="text/css">
</head>
<body>
    
    <nav class ="navbar">
        <div class = "img">
            <!-- inserting image -->
            <img src="mits.jpg" alt="college" width="100%" height="100%">
        </div>
        <!-- crating navigation bar -->
        <ul class="menu">
            <li class="menu-item"><a href="http://nec.mitsweb.in/index">Home</a></li>
            <li class="menu-item"><a href="http://nec.mitsweb.in/about">About</a></li>
            <!-- <li><a href="contact.html">Contact</a></li> -->
            <li class="menu-item"><a href="index.php">Login</a></li>
</nav>
    <div class="form">
    <form action="login.php" method ="post">
        <h2>Faculty Login</h2>
        <?php
            if (isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php
                
            }
            ?>
        <lable for="username"></lable><br>
        <input type="varchar" name="username" placeholder="Username" ><br>
        <lable for="password"></lable><br>
        <input type="password" name="password" placeholder="Password" ><br>
        <button type="submit">Login</button>
        </form>
    </div>
    <!-- adding a footer  -->
    <div class="footer">
        <p>©2023 Created By Software Development Club, MITS</p>
    </div>
</body>
</html>