<?php
include ('header.php');
?>

<div id = "main">
<div id = "blok">
<h2>Sign In</h2>
<form action="login.php" method="post">
	<input type="text" id="inp1" name="login" placeholder="name">
	<input type="text" id="inp2" name="password" placeholder="password">
	<button>Enter</button>
	<input type="checkbox" name="remember">Remember
</form>
</div>
</div>
<?php
 

  if(isset($_SESSION['error'])){
  	echo $_SESSION['error'];
  	unset($_SESSION['error']);
  }
?>
<style>
	body{
		background:url(fh_footer.jpg);
	}
	#main{
		background:transparent;
		height:540px;
	}
	#blok{
		width:300px;
        border: 4px solid #32a893;
		text-align: center;
		border-radius:10px;
		margin-left:500px;
		position:relative;
		top: 150px;
		transform: scale(1);
        box-shadow: 0 0 5px 5px rgba(34, 60, 80, 0.2);
        transition: box-shadow 0.5s, transform 0.5s;
		font-family: cursive;
		background:#7423FF;
		display:flex;
		justify-content:center;
		flex-direction:column;
	}
	#blok:hover{
		transform: scale(1.2);
        box-shadow: 0 0 15px 7px rgba(34, 60, 80, 0.2);
        transition: box-shadow 0.5s, transform 0.5s;
	}
	#inp1{
		width:250px;
		height:25px;
		border: 2px solid black;
		border-radius:10px;
		text-align:center;
		margin:10px;
		padding:5px;
	}
	#inp2{
		width:250px;
		height:25px;
		border:2px solid black;
		border-radius:10px;
		font-family:cursive;
		text-align:center;
		margin:10px;
		padding:5px;
	}
</style>