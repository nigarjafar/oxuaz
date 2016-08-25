<?php 
session_start();
if($_SESSION["login"]){ ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    </style>
    <body>
        <h1>List Page</h1>
        <form action="logout.php" method="post">
            <input type="submit" value="Logout" class="btn btn-default" name="logout">
        </form>
    </body>
</html>
<?php
}
else{
    header("Location:admin.php");
}
?>