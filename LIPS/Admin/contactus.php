<?php
$msg="";
if(isset($_POST['submit']))
{
include("config/connection.php");
 
if(!$conn)
{
die(' Server connection Failed.... ');
}
$Cperson=$_POST['cperson'];
$Pno=$_POST['pno'];
$Mobile=$_POST['mobile'];
$Mail=$_POST['mail'];
$Website=$_POST['website'];
$Address=$_POST['address'];
$sql="insert into contactus(cperson,pno,mobile,mail,website,address)
 values ('$Cperson', '$Pno', '$Mobile','$Mail','$Website','$Address');";

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
					<div class="addleft"> Contact Person : </div>
					<div class="addright"> <input type="text" name="cperson" class="input" placeholder="Contact Person">
					</div>
				</div>

				<div class="addrow">
					<div class="addleft"> Phone Number : </div>
					<div class="addright"> <input type="text" name="pno" class="input" placeholder="Phone Number">
					</div>
				</div>

				<div class="addrow">
					<div class="addleft"> Mobile Number : </div>
					<div class="addright"> <input type="text" name="mobile" class="input" placeholder="Mobile Number ">
					</div>
				</div>

				<div class="addrow">
					<div class="addleft"> Email Id: : </div>
					<div class="addright"> <input type="email" name="mail" class="input" placeholder="Email"> </div>
				</div>

				<div class="addrow">
					<div class="addleft"> Website : </div>
					<div class="addright"> <input type="text" name="website" class="input" placeholder="Website ">
					</div>
				</div>


				<div class="addrow" style="height:100px;">
					<div class="addleft"> Address : </div>
					<div class="addright" style="height:100px"> <textarea name="address" class="tarea"
							placeholder="Address"></textarea> </div>
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