<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/indexnews.css">
</head>
<body>
	<div class="container">
        <?php   
        include "db.php";
        $id=$_GET['id'];
        $sql="SELECT * FROM news where id=$id";
        $query=mysqli_query($db_con, $sql); 

        
        $row=mysqli_fetch_assoc($query);
        ?>
        
		<div class="new col-md-offset-3">
			<img src="<?=$row['img']?>" alt="">
			<h2><?=$row['heading']?></h2>
			<p><?=$row['text']?>
			</p>
		</div>
	</div>	
</body>
</html>