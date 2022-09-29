<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('location:index.php');
    }
   

?>

<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <h1>FORM LOGIN</h1>
        
        <div>
            Username : <input type="text" name="username" id="">
        </div>
        <div>
           Password : <input type="password" name="password" id="">
        </div>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>