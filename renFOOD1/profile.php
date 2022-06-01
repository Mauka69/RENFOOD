<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<style>
	.pp{
		font-size: 120px;
		/*margin-left: 345px;*/
		
	}
	.ppp{
		margin-left: 1250px;
		margin-top: -350px;
	}

	.with1{
		width: 500px;
		height: 550px;
		border-style: solid;
		border-width: 5px;
	}
	#core{
		width: 100%;
		height: 100vh;
		display: flex;
	}
</style>>

<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<div id="core">
    	<div class="with1">
    		<img src="img/prof.png">


    	</div>
      <p class="pp">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p class="ppp"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
      <p class="p"><a href="index.php">  back </a>></p>
      </div>
    <?php endif ?>