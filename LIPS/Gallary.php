<!DOCTYPE html>
<html lang="en">

<head>
	<title> Lucky Institute/Gallary </title>
	<link href="CSS/style.css" rel="stylesheet">
</head>

<body>

	<div class="outer">
	<?php
		 include("header.php");
		 include("menubar.php");
		 ?>
		<div>
			<img src="Images/OurCampus.PNG" ; height="150" ; width="1200">
		</div>
		<div class="main">
		<?php
		 include("left-menu.php")
		 ?>
			<div class="mright">
				<div class="gallary"><img class="Gimage" src="Images/G01.jpg"></div>
				<div class="gallary"><img class="Gimage" src="Images/G02.jpg"></div>
				<div class="gallary"><img class="Gimage" src="Images/G03.jpg"></div>
				<div class="gallary"><img class="Gimage" src="Images/G04.jpg"></div>
				<div class="gallary"><img class="Gimage" src="Images/G05.jpg"></div>
				<div class="gallary"><img class="Gimage" src="Images/G06.jpg"></div>
				<div class="gallary"><img class="Gimage" src="Images/G07.jpg"></div>
				<div class="gallary"><img class="Gimage" src="Images/G08.jpg"></div>
				<div class="gallary"><img class="Gimage" src="Images/G09.jpg"></div>
			</div>

		</div>
		<?php
	 	include("footer.php")
	 ?>
	</div>
</body>

</html>