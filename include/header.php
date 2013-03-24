<div id="wrapper">

<img src="images/wuukerlogo.gif" width="121" height="36" alt="wuuker">

<!-- Login Top Right -->

<div id="login">
<?php
if(isset($_SESSION['login'])==1){
}else{
echo"<form name='form2' method='post' action='login.php'>

<div id='div3'><input name='login_temp' type='text' id='login' value='Login' size='25' onfocus='changeBox2()'/>
</div>
<div id='div4' style='display:none'><input name='login' id='login' type='text' value='' size='25' onBlur='restoreBox2()'/>
</div>

<div id='div1'><input name='pass_temp' type='text' value='Password' size='25' maxlength='25' onfocus='changeBox()'/>
</div>
<div id='div2' style='display:none'><input name='passwd' id='passwd' type='password' value='' size='25' maxlength='25' onBlur='restoreBox()'/>
</div>
    
	<input type='submit' value='Submit' style='font-size:15px'/>
	<a href = 'user_f.php'>Sign up</a>
	</form>";
};
?>
</div>