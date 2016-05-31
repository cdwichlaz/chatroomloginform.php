<?
session_start();

function loginForm() {
	echo'
	<div id="loginform">
	<form action="chatroomloginform.php" method="post">
		<p>Please enter your name to continue:</p>
		<lable for="name">Name:</lable>
		<input type="text" name="name" id="name" />
		<input type="submit" name="enter" id="enter" value="Enter" />
	</form>
	</div>
	';
}

if(isset($_POST['enter'])) {
	if($_POST['name'] != "") {
		$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
	}
	else{
		echo '<span class="error">Please type in a name</span>'
	}
}
?>

<?php
if(!isset($_SESSION['name'])) {
	loginForm();
}
else{
?>
<div id="wrapper">
	<div id="menu">
		<p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
		<p class="logout"><a id="exit" href="#">Exit Chat</a></p>
		<div style="clear:both"></div>
	</div>
	<div id="chatbox"></div>

	<form name="message" action="">
		<input name="usermsg" type="text" id="usermsg" size="63" />
		<input name="submitmsg" type="submit" id="submitmsg" value="Send" />
	</form>
</div>
<script type="text/javascript" scr="http://ajax.googleapis/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$ (document).ready(function(){
});
</script>
<?php
}
?>