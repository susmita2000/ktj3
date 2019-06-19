<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<link href='https://fonts.googleapis.com/css?family=Gorditas' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Eagle Lake' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>

<head>
 <title>Form site</title>
</head>
<style type="text/css">
body{
	background-image: url("bac3.jpg");
	
	margin: 0px;
	background-size: cover;
	
 
	background-repeat: no-repeat;

}
    .hea{
		
		text-align: center;
		font-size: 80px;
		font-family: 'Gorditas';
		 animation-name: example;
         animation-duration: 4s;
         animation-iteration-count: infinite;
	}
	@keyframes example {
  0%   {color: red;}
  25%  {color: yellow;}
  50%  {color: #cc00cc;}
  100% {color: #00ff00;}
      }
	header.sec{
		height: 65vh;
		background-color: rgba(255,255,255,0.3);
		padding-left: 25px;
		padding-right: 25px; 
		margin-top: 0px;

		
	}
	.frm1{
		position: absolute;
		
		width: 500px;
		 margin-top:1%; 
		left:34%;
		padding-left: 10px;
		padding-right: 10px;
		border: 4px solid #cc00ff;
		border-radius: 10px;
		font-size: 30px;
		padding-top: 20px;
		font-family: 'Eagle Lake';
		color:#ffff00;
		background-color: rgba(0,0,0,0.4);

	
	}
	.btn{
		width: auto;
    	height: 30px;
    	font-size: 20px;
    	margin-bottom: 10px;
	}
	.log{
			margin-top: 2%;
		font-size: 40px;
		color: #660066;
		font-family: 'Autour One';
		padding-top: 10px;
	}
</style>


<body>
	<h1 class="hea">QUIZTOPIA</h1>
	
	<header class="sec">
	<center><div class="log">SIGN UP!</div></center>
	<div id ="frm" class="frm1">
<form method="post" action="connect.php">
	<p>
Username : <input type="text"  input style="font-size: 20px" name="username"><br>
</p>
<p>
Password : <input type="password" input style="font-size: 20px" name="password"><br>
</p>
<center><input type="submit" class="btn" value="Submit"></center>
	</form>

	</div>

</header>
</body>
</html>
