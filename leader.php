<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<link href='https://fonts.googleapis.com/css?family=Architects Daughter'rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Atomic Age' rel='stylesheet'>
<head >
<title>
	login
</title>

</head>
<style type="text/css">
	.lead{
		width:240px;
		margin-top: 1%;
		font-size: 30px;

		
	}
	.cont{
		position: absolute;
		top:150px;
		right: 10px;
		background-color: rgba(0,0,0,0.5);
		border: 2px solid blue;
		border-radius: 20px;
		padding-left: 10px;
		color: yellow;
		padding-top: 10px;
	}
	.lead3{
		position: absolute;
		right:0px;
		right: 10px;
		font-family: 'Architects Daughter';
	}
	.lead2{
		font-family: 'Architects Daughter';
		
	}
	.col2{
		position: absolute;
		right:0px;
		right: 10px;
		font-size: 22px;
		color: white;
		text-decoration: underline;
		font-family: 'Atomic Age';
	}
	.col1{
		font-size: 22px;
		color: white;
		text-decoration: underline;
		font-family: 'Atomic Age';
		
	}
	.hea{
		font-size: 30px;
		color: white;
		 font-family:cursive;
		  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
		

	}
	@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #e60073, 0 0 20px #e60073, 0 0 25px #e60073, 0 0 30px #e60073, 0 0 35px #e60073;
  }
  
  to {
    text-shadow: 0 0 10px #fff, 0 0 15px #ff4da6, 0 0 20px #ff4da6, 0 0 25px #ff4da6, 0 0 30px #ff4da6, 0 0 35px #ff4da6, 0 0 40px #ff4da6;
  }
}
</style>



<?php

$con=mysqli_connect("fdb26.awardspace.net","3071595_sush","susmita@1");

mysqli_select_db($con,"3071595_sush");
$sql="SELECT username,score FROM user2  ORDER BY score DESC LIMIT 5";
		$queryresult=mysqli_query($con,$sql);
		?>
		<div class="cont">
			<center><span class="hea">LEADERBOARD</span></center><br>
			<span class="col1">Username </span>   
			<span class="col2">Score</span><br>
			<?php
		 while($rows=mysqli_fetch_array($queryresult))
          {
          	?> 
          	<div class=lead>
          	<span class="lead2"><?php echo $rows['username'];?></span>
          	<span class="lead3"><?php echo $rows['score'] ;?></span>
          	<?php
          	echo "\n";
          	?>

          </div>
          	<?php
          	
          }
          ?>
      </div>
      </html>