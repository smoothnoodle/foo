<div id="wrapper">
<img src="images/wuukerlogo.gif" width="121" height="36" alt="taskMe">


<div id="logout">
<?php
	if(isset($_SESSION['login'])==1){
	echo $_SESSION['login']." has login. <a href='unset.php'>logout</a>";};
?>
</div>