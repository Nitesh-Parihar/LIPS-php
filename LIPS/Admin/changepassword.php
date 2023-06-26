<?php
$msg="";
if(isset($_POST['submit']))
{
 include("config/connection.php");

if(!$conn)
{
die(' Server connection Failed.... ');
}
$Op=$_POST['op'];
$Np=$_POST['np'];
$Cp=$_POST['cp'];
$sql="insert into changepassword(op,np,cp) values ('$Op', '$Np', '$Cp');";
// $sql="insert into addnews(title,descr) values ('$Title', '$Descr');";

if(mysqli_query($conn, $sql))
{
$msg= "Record inserted Successfully";
}
else
{ $msg= "Could Not inserted ".mysqli_error($conn);
}
mysqli_close($conn);
}
?>

<html>
<head>
	<title> Contact Us </title>
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>


</body>
<div class="outer">

	<div class="header">
		<div class="hleft"> LIPS </div>
		<div class="hright"> <img src="images/admin.png" width="100%" height="100%" /> </div>

	</div>
	<div class="main">
	<?php
		include('menu-left.php');
		?>
		<div class="mright">
			<form method="post">


				<div class="addrow">
					<div class="addleft"> Old Password : </div>
					<div class="addright"> <input type="password" name="op" class="input" placeholder="Old Password ">
					</div>
				</div>


				<div class="addrow">
					<div class="addleft"> New Password : </div>
					<div class="addright"> <input type="password" name="np" class="input" placeholder="New Password ">
					</div>
				</div>

				<div class="addrow">
					<div class="addleft"> Confirm Password : </div>
					<div class="addright"> <input type="password" name="cp" class="input"
							placeholder="Confirm Password "> </div>
				</div>




				<div class="addrow">
					<div class="addleft"></div>
					<div class="addright"> <input type="submit" name="submit" value="Update" class="submitbtn"> </div>
				</div>

			</form>
		</div> <!-- mright-->
	</div> <!-- main end-- >
<div class="footer"> </div>  -->

</div>

</html>