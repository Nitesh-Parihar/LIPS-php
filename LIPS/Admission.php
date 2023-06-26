<!DOCTYPE html>
<html lang="en">

<head>
	<title> Lucky Institute/Courses</title>
	<link href="CSS/style.css" rel="stylesheet">
</head>

<body>

	<div class="outer">
	<?php
		 include("header.php");
		 include("menubar.php");
		 ?>
		<div>
			<!-- <img src="Images/Courses.PNG";
            height="150";
             width="1200"> -->
		</div>
		<div class="main">
		<?php
		 include("left-menu.php")
		 ?>
			<div class="mright in">
				<h1>Plase Enter your Details</h1>
				<form name="frm1" method="post" enctype="multipart/form-data">
					<div class="curow">
						<div class="culeft">Name <red>*</red>
						</div>
						<div class="curight">
							<input type="text" class="input" name="uname" placeholder="User Name" required>
						</div>
					</div>
					<div class="curow">
						<div class="culeft">Email<red>*</red>
						</div>
						<div class="curight">
							<input type="email" class="input" name="uemail" placeholder="example@gmail.com" required>
						</div>
					</div>
					<div class="curow">
						<div class="culeft">Password<red>*</red>
						</div>
						<div class="curight">
							<input type="password" class="input" name="upass" placeholder="Password" required>
						</div>
					</div>
					<div class="curow">
						<div class="culeft">Gender</div>
						<div class="curight">
							<input type="radio" name="g" value="M" checked>Male
							<input type="radio" name="g" value="F" checked>Female
						</div>
					</div>
					<div class="curow">
						<div class="culeft">Qulification</div>
						<div class="curight">
							<input type="checkbox" name="Q1" value="10">10<sup>th</sup>
							<input type="checkbox" name="Q2" value="10">12<sup>th</sup>
							<input type="checkbox" name="Q3" value="degree">Degree
							<input type="checkbox" name="Q4" value="diploma">Diploma
						</div>
					</div>

					<div class="curow">
						<div class="culeft">Image</div>
						<div class="curight">
							<input type="file" class="input im" name="uimage">
						</div>
					</div>
					<div class="curow " style="height: 100px;">
						<div class="culeft" style="height: 90px;">Address
						</div>
						<div class="curight">
							<textarea name="uaddress" class="tarea"></textarea>
						</div>

					</div>
					<div class="curow">
						<div class="culeft">Action
						</div>
						<div class="curight">
							<input type="button" class="btn" name="btn1" value="print">
							<button class="btn bt" name="btn2">Save Data</button>
						</div>
					</div>
					<div class="curow">
						<div class="culeft">City
						</div>
						<div class="curight">
							<select name="city" class="input">
								<option value="0">Select</option>
								<option value="1">Ajmer</option>
								<option value="2">Bikaner</option>
								<option value="3">Jodhpur</option>
								<option value="4">Jaipur</option>
								<option value="5">Pali</option>
							</select>
						</div>
					</div>
					<div class="curow">
						<div class="culeft">Action
						</div>
						<div class="curight">
							<input type="submit" class="btn" name="submit" value="Submit">
							<input type="reset" class="btn" name="reset" value="Reset">
						</div>
					</div>
				</form>

			</div>
			<form>

			</form>
		</div>
		<?php
	 	include("footer.php")
	 ?>
	</div>
</body>

</html>