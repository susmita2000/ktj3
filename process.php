<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<head >
<title>
	welcome
</title>

</head>
<style type="text/css">
	h3{
		text-align: center;
		font-size: 60px;
	}
	.info{
		font-size: 25px;
		text-align: center;
	}
	.btn{
		margin: auto;
		font-size: 22px;
	}
      body{
    background-image: url("bgg4.jpg");
    background-size: cover;
    font-family: cursive;
  }


</style>

<body>
<?php

$con=mysqli_connect("fdb26.awardspace.net","3071595_sush","susmita@1");

mysqli_select_db($con,"3071595_sush");
	?>
<h3>WELCOME <?php echo $_SESSION['username'];?></h3>
 
<div class="info">YOU HAVE TO SELECT ONE OUT OF 4 OPTIONS</div><br>
<?php
 $q="SELECT * from user2";
		$query=mysqli_query($con,$q);
		$name=$_SESSION['username'];
          while($rows=mysqli_fetch_array($query))
          {
          	if($rows['username']==$name)
          	{
          		if($rows['level']==0)
          		{
          			?>
          			<center><a href="lev1.php"><button type="button" class="btn btn-warning">START</button></a></center>
          			<?php
          		}
          		else if($rows['level']==1)
          		{
          			?>
          			<center><a href="lev2.php"><button type="button" class="btn btn-warning">START</button></a></center>
          			<?php
          		}
          		else if($rows['level']==2)
          		{
          			?>
          			<center><a href="lev3.php"><button type="button" class="btn btn-warning">START</button></a></center>
          			<?php
          		}
          		else if($rows['level']==3)
          		{
          			?>
          			<center><a href="lev4.php"><button type="button" class="btn btn-warning">START</button></a></center>
          			<?php
          		}
                    else if($rows['level']==4)
                    {
                         ?>
                         <center><a href="levb3.php"><button type="button" class="btn btn-warning">START</button></a></center>
                         <?php
                    }
          	}
          }



?>
</body>
</html>
