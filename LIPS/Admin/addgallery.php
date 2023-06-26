<?php
$msg="";
if(isset($_POST['submit']))
{
	 include("config/connection.php");

if(!$conn)
{
die(' Server connection Failed.... ');
}
$Title=$_POST['title'];
$File=$_POST['file'];
$Visible=$_POST['visible'];
$sql="insert into addgallery(title,file,visible) values ('$Title', '$File', '$Visible');";
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
	<title> Add Gallery </title>
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
					<div class="addleft"> Title : </div>
					<div class="addright"> <input type="text" name="title" class="input" placeholder="Title"> </div>
				</div>

				<div class="addrow">
					<div class="addleft"> Image : </div>
					<div class="addright"> <input type="file" name="file" class="input"> </div>
				</div>


				<div class="addrow">
					<div class="addleft"> Visibility : </div>
					<div class="addright">
						<input type="radio" name="visible" class="" value="Hide" checked> Hide
						<input type="radio" name="visible" class="" value="show"> Show
					</div>
				</div>


				<div class="addrow">
					<div class="addleft"></div>
					<div class="addright"> <input type="submit" name="submit" value="Submit" class="submitbtn"> </div>
				</div>

			</form>
		</div> <!-- mright-->
	</div> <!-- main end-- >
 <div class="footer"> </div> -->

</div>

</html>