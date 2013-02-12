 <meta name="author" content="HIR DESIGNS" />
	     
	    <style type="text/css" media="all">@import "css/master.css";</style>  <style type="text/css" media="all">@import "css/master.css";</style>
	</head>
<body>
		<div id="page-container">
			<div id="main-nav">
				<ul class="main-menu">
					<li id="about"><a href="index.php"><img src="images/NavAbout.jpg"/></a></li>
					<li id="browse"><a href="#"><img src="images/NavBrowse2.jpg"/></a></li>
					<li id="search"><a href="#"><img src="images/NavSearch.jpg"/></a></li>
					<li id="search"><a href="#"><img src="images/NavReg.jpg"/></a></li>
				</ul>
			</div>
			<div id="header">
				
			</div>
<?php
$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_database = "test";
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)
	or die("<h1>Oops some thing went wrong</h1>");
	mysql_select_db($mysql_database, $bd) or die("<h1>Oops, something went wrong</h1>");
$pass1=$_POST['Password'];
$pass2=$_POST['Password2'];
if ($pass1 == $pass2){
	
	$first=$_POST['FirstName'];
	$last=$_POST['LastName'];
	$email=$_POST['Email'];
	$drop=$_POST['dropdown'];
	//$sql="INSERT INTO members (FirstName, LastName, UserID, Pass, SkillLevel)
		  //VALUES('$first','$last','$email','$pass1','$drop')";
	mysql_query("INSERT INTO members (FirstName, LastName, UserID, Pass, SkillLevel)
		  VALUES('$first','$last','$email','$pass1','$drop')");
		  echo "<h1>Thank you for registering!</h1><p>To view your profile, please login at the <a href=index.php> Home</a> page.</p>";
}else if($pass1 != $pass2){
		echo "<h1>I'm sorry, your passwords don't match.</h1><p>Please <a href=registration.php> return to registration</p></a>";
} else
  {
  die('Error: ' . mysql_error());
  }
  mysql_close($bd);

?>
</body>
</html>
