<!DOCTYPE html>
<html>
<head>
<title> login</title>
<style>
	body {
			background:#b3ffb3;
			text-align:center;
			}

	fieldset {
			display: block;
			border: 2px solid blue;
			border-radius:10px;
			margin-top:100px;
			margin-right:400px;
			margin-bottom:0;
			margin-left:400px;
			box-shadow:0 0 100px white;
			
			}
	input{
			display: block;
			align:center;
			border-radius:5px;
			margin: auto;
			top: 0;
			bottom: 0;
			right: 0;
			left: 0;
			box-shadow:0 0 15px blue;
			}
	input.i1{
			display: block;
			align:center;
			background-color:blue;
			border: 0;
			color:white;
			border-radius:10px;
			width:100px;
			height:30px;
			margin: auto;
			top: 0;
			bottom: 0;
			right: 0;
			left: 0;
			}
	</style>
</head>
<body>
<?php
//Insert in the table
$conn=mysql_connect("localhost","ashu","");
	if (!$conn) 
			{
				die('Could not connect: ' . mysql_error()); 
			}
	mysql_select_db("ashu");


$pname=$_POST['new_name'];
$pemail=$_POST['new_email'];
$puid=$_POST['new_user'];
$pass=$_POST['new_pw'];
echo "hello here are the details you entered: name: ".$pname."<br> E-mail id:" .$pemail."<br> User id:".$puid;

$q1="insert into user_record values('$pname','$pemail','$puid','$pass')" ;
$rq1=mysql_query($q1,$conn);
if($rq1)
{
	echo "values inserted !!";
}
else
	echo "values not inserted !!";
?>
 
 
 <form name="f1" action="spell.php" method=POST>
		<fieldset>
			<legend>Proceed to Spell checker</legend><br>
			<input class="i1" type="submit" value="Let's Go!"><br><br>
		</fieldset>
</form>
</body>
</html>