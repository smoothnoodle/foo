<?php 

include 'settings.php';
date_default_timezone_set('Australia/Brisbane');

//Common on every page
//===========================================================================================================
function connect($username, $password, $host, $db_name){
//handle database connection
//Variable: $username, $password, $host, $db_name
//return object $link

	$link = mysql_connect("$host", "$username", "$password");
	if(! $link){
		die("Couldn't connect to MySQL: ".mysql_error());
	}
	mysql_select_db("$db_name")or die("cannot select DB: ".mysql_error()); 
	return $link;
};

//=============================================================================================================
function query($sql,$username, $password, $host, $db_name) {
//handle query 
//Variable: $sql,$username, $password, $host, $db_name
//return object $result

	$link = connect($username, $password, $host, $db_name);
	$result = mysql_query($sql, $link);
	mysql_close($link);
	echo "run query";
    return $result;
}
//=============================================================================================================
function display_name($result){//good coding here
//handle display name to screen
//Variable: $result 
//return none
	echo "run display";
	echo "<table border=1>";
	echo "<hd><tr><td>FirstName</td><td>LastName</td></hd>";
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		echo "<tr><td>$row[1]</td><td>$row[2]</td></tr>";
	};
	echo "</table>";
};

?>