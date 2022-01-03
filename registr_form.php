<?php 
include('header.php');
?>
<div id = "reg_main">
<h1>Sign Up</h1>
<form action="register.php" method="post">
	<input class = "inp4" type="text" name="login" placeholder="Name">
	<input class = "inp4" type="password" name="password" placeholder="Password">
	<input class = "inp4" type="password" name="confirm" placeholder="Password">
	<input class = "inp4" type="email" name="email" placeholder="Email">
	<button class = "inp4">Send</button>
</form>
</div>
<?php 


if (isset($_SESSION['errors'])) 
   foreach ($_SESSION['errors'] as  $value) 
      echo $value.'<br>';
?>

<style>
   body{
	   background:url(fh_footer.jpg);
   }
   #reg_main{
          width:400px;
          text-align: center;
		  border: 4px solid #32a893;
          border-radius:10px;
	      margin-left:450px;
	      position:relative;
	      top: 100px;
	      transform: scale(1);
          box-shadow: 0 0 5px 5px rgba(34, 60, 80, 0.2);
          transition: box-shadow 0.5s, transform 0.5s;
	      font-family: cursive;
		  display:flex;
		  justify-content:center;
		  flex-direction:column;
		  background:#7423FF;
       }
       #reg_main:hover{
            transform: scale(1.2);
            box-shadow: 0 0 15px 7px rgba(34, 60, 80, 0.2);
            transition: box-shadow 0.5s, transform 0.5s;
       }
	   .inp4{
           width:250px;
		   height:25px;
	 	   border: 2px solid black;
		   border-radius:10px;
		   text-align:center;
		   margin:10px;
		   padding:5px;
       }
</style>