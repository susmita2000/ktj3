<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Emblema One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Cherry Swash' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Eagle Lake' rel='stylesheet'>
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>

<head >
<title>
	level1
</title>

</head>
<style type="text/css">
	.l1{
		
		
		width:1200px;
		margin-left: 20px;
		background-color: rgba(255,255,255,0.2);
		padding-left: 10px;
		padding-top: 15px;
		padding-right: 10px;
	}
	h3{
       text-align: center;
       font-size: 50px;
       font-family: 'Emblema One';
       color: #666699;
       font-size: 80px;
	}
	
	body{
		background-image: url("bgg3.jpg");
		background-size: cover;

	}
	.card{
		color:#660066;
		font-size: 28px;
		font-size: 28px;
		color: #009933;
		font-family:'Cherry Swash';
	}
	.opt{
		color:#003399;
		font-size: 22px;
		font-weight: 700;
		font-family: 'Eagle Lake';
		color: #660066;
	}
</style>
<body>
<h3>LEVEL : 1</h3>
<div class="l1">
	<form action="levb0.php" method="POST">
<?php
include 'leader.php';
$numbers = array( 1, 2, 3, 4, 5);
shuffle($numbers);
require_once 'database.php';
for($i=0;$i<5;$i++)
{
 $sql = "SELECT * FROM question1 WHERE qid=$numbers[$i]";
   mysqli_select_db($conn,'3071595_sush');
   $retval = mysqli_query( $conn,$sql);
   
  
 while($row = mysqli_fetch_array($retval)) {?>
       <div class="card bg-light"><?php echo " {$row['text']}  <br> ";?></div><?php
   
     
   $sql1 = "SELECT * FROM choice1 WHERE qno=$numbers[$i]";
   $retval1 = mysqli_query( $conn,$sql1);

	
       	       
       	       	
               while($row1 = mysqli_fetch_array($retval1)) {?>
       
       <div class="opt"><input type="radio" name="quizcheck[<?php echo $row1['qno'] ;?>]" value="<?php echo $row1['id']; ?>"><?php echo $row1['text'] ;?></div>
         
   
   <?php }
    }
    ?>
    <br>
    <br>
    <?php
}
 
    ?>
    <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
   
</form>
 <a href="logout.php"><center><button type="button" class="btn btn-info">LOGOUT</button></center></a>
</div>

</body>
<?php
    mysqli_close($conn);
    ?>
</html>