<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oxu.az</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
        
        <?php   
        include "db.php";
        $sql="SELECT * FROM news";
        $query=mysqli_query($db_con, $sql);
        
         while($row=mysqli_fetch_assoc($query)){ ?>
            <div class="col-md-4">
				<a href="indexnews.php?id=<?=$row['id']?>"class="news"> 
                    <img src="<?=$row['img']?>" alt="">
                    <div class="text">
						<p><?=$row['heading']?></p>
					</div>
                </a>
			</div>
            <?php } ?>
	</div>
</body>
</html>