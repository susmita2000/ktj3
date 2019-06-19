<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<head >
<title>
	levb3
</title>

</head>
<style type="text/css">
	.count{
		font-size: 40px;
		text-align: center;
		margin-top: 8%;
	}
	.score{
         font-size: 35px;
		text-align: center;
		margin-top: 2%;
	}
	.score2{
         font-size: 35px;
		text-align: center;
		margin-top: 2%;
	}
	.com{
      font-size: 40px;
      font-family: cursive;
	}
	.btn {
       font-size: 30px;
	}
	.card{
		width: 1000px;
		margin: auto;
		margin-top: 100px;
	}
	body{
		 background-image: url("bgg2.jpg");
    background-size: cover;
}
</style>

  <div class="card bg-success text-white">
  	<div class="com"><center>Congratulations! you have completed the quiz.</center></div>
<?php

/*if(!isset($_SESSION['username'])){
	header('location:login.php');

}*/
$con=mysqli_connect('fdb26.awardspace.net',"3071595_sush","susmita@1");
mysqli_select_db($con,'3071595_sush');
if(isset($_POST['submit'])){
	
	
        $result=0;
        $i=1;
        if(!empty($_POST['quizcheck']))
        {
		$count=count($_POST['quizcheck']);?>
		<div class="count"><?php echo "Out of 5,you have attempted ".$count. " options";?></div>
		<?php
		$selected=$_POST['quizcheck'];
		
	
		for($i=1;$i<=5;$i++){
          $q="SELECT * from choice4";
		$query=mysqli_query($con,$q);
          while($rows=mysqli_fetch_array($query))
          {
          	if(array_key_exists($i,$selected))
          	{
             $checked=($rows['id']==$selected[$i]&&$rows['val']==1);
              if($checked)
           {
           	$result++;
           }
          }
          }
          
		}
	}
		?>

		<div class="score"><?php echo "SCORE IN LEVEL 4 : ".$result;?></div>
		<?php
        $name=$_SESSION['username'];


		$sql="UPDATE user2 SET score4='$result' WHERE username='".$name."'";
		$queryresult=mysqli_query($con,$sql);
		$sql="UPDATE user2 SET score=(score1+score2+score3+score4) WHERE username='".$name."'";
		$queryresult=mysqli_query($con,$sql);
		$sql="UPDATE user2 SET level='4' WHERE username='".$name."'";
		$queryresult=mysqli_query($con,$sql);
          $q="SELECT * from user2";
		$query=mysqli_query($con,$q);
          while($rows=mysqli_fetch_array($query))
          {
          	if($rows['username']==$name)
          	{
          		?>

          		<div class="score2"><?php echo "TOTAL SCORE : ".$rows['score'];?></div>
          		<?php
          	}


          }

		mysqli_close($con);


	}
		?>
		<br><br>
		
		<a href="logout.php"><center><button type="button" class="btn btn-info">LOGOUT</button></center></a><br><br>
	</div>