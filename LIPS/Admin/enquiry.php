<html>

<head>
	<title> View Gallery </title>
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

				<div class="viewrow">

					<div class="viewcol">
						<heading> S.No. </heading>
					</div>
					<div class="viewcol"> <input type="submit" name="deleteall" value="Delete" class="del"></div>
					<div class="viewcol w210">
						<heading> Name </heading>
					</div>
					<div class="viewcol w100">
						<heading> Phone </heading>
					</div>
					<div class="viewcol w210">
						<heading> Email </heading>
					</div>
					<div class="viewcol w310">
						<heading> Enquiry </heading>
					</div>


				</div>


				<div class="viewrow">
					<div class="viewcol"> 1</div>
					<div class="viewcol"> <input type="checkbox" name="chk" value=""></div>
					<div class="viewcol w210"> Aryan</div>
					<div class="viewcol w100"> 9876543210</div>
					<div class="viewcol w210"> aryan@gmail.com</div>
					<div class="viewcol w310"> about C Programming Language</div>
				</div>
				<div class="viewrow">
					<div class="viewcol"> 1</div>
					<div class="viewcol"> <input type="checkbox" name="chk" value=""></div>
					<div class="viewcol w210"> Aryan</div>
					<div class="viewcol w100"> 9876543210</div>
					<div class="viewcol w210"> aryan@gmail.com</div>
					<div class="viewcol w310"> about C Programming Language</div>
				</div>
				<div class="viewrow">
					<div class="viewcol"> 1</div>
					<div class="viewcol"> <input type="checkbox" name="chk" value=""></div>
					<div class="viewcol w210"> Aryan</div>
					<div class="viewcol w100"> 9876543210</div>
					<div class="viewcol w210"> aryan@gmail.com</div>
					<div class="viewcol w310"> about C Programming Language</div>
				</div>
				<div class="viewrow">
					<div class="viewcol"> 1</div>
					<div class="viewcol"> <input type="checkbox" name="chk" value=""></div>
					<div class="viewcol w210"> Aryan</div>
					<div class="viewcol w100"> 9876543210</div>
					<div class="viewcol w210"> aryan@gmail.com</div>
					<div class="viewcol w310"> about C Programming Language</div>
				</div>
				<div class="viewrow">
					<div class="viewcol"> 1</div>
					<div class="viewcol"> <input type="checkbox" name="chk" value=""></div>
					<div class="viewcol w210"> Aryan</div>
					<div class="viewcol w100"> 9876543210</div>
					<div class="viewcol w210"> aryan@gmail.com</div>
					<div class="viewcol w310"> about C Programming Language</div>
				</div>








			</form>
		</div> <!-- mright-->
	</div> <!-- main end-->
	<div class="footer"> </div>

</div>

</html>