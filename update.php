<!DOCTYPE html>
<html>
<head>
	<title>Update Data of Student</title>
	<style type="text/css">
		*
		{
			margin: 10px;

		}
		body 
		{
				background-image: url('back_dark.png');
				background-size: cover;
				color: #fff!important;
		}
		.Heading
		{
			font-size: 50px;
			text-align: center;
		}
		.main
		{
			margin-top: 50px;
		}
		.register
		{
			font-size: 30px;
			margin-left: 550px;
		}
		.number
		{
			margin-left: 20px;
			width: 300px;
			border-radius: 10px;
			font-size: 20px;
			text-align: center;
		}
		.button1
		{
		  font-size: 30px;
		  margin-left: 770px;
		  width: 300px;
		  margin-top: 50px;
		  border-radius: 20px;
		}
		.button1:hover 
		{
			transition-property: all;
			transition-duration: 2s;
			background-color: #000;
			color: #fff;
		}

	</style>
</head>
<body>
	<h1 class="Heading">Update The Data of Student</h1>
	<form class="main" method="post">
		
		<span class="register">Enter the Registeration number</span> <input type="text" class="number" name="regno" placeholder="Enter the Registeration Number"><br>
		<button class="button1" type="submit" name="buttonn">Submit</button><br>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="sample";
			$connection=mysqli_connect($servername,$username,$password,$dbname);
			if (isset($_POST['buttonn'])) {
			    $bran=$_POST['regno'];
		        $query="SELECT * FROM samplee WHERE Register='$bran'";
		        $data=mysqli_query($connection,$query);
		        echo '<div class="view">';
		        while ($dat = mysqli_fetch_array($data)) {
		        	$register=$dat[0];
		        	$name = $dat[1];
		        	$fname=$dat[2];
		        	$mname=$dat[3];
		        	$dob=$dat[4];
		        	$roll=$dat[5];
		        	$branch=$dat[6];
		        	$sem=$dat[7];
		        	$category=$dat[8];
		        	$address=$dat[9];
		        	$number=$dat[10];
		        	$gender=$dat[11];
		          echo '<table border="5"  cellspacing="3">';
		          echo "<tr><td><label class='lab'>Registeration number</label></td>". "<td><input type='number' name='registerno' value='$register'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Name</label></td>". "<td><input type='text' name='studentname' value='$name'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Father_Name</label></td>" . "<td><input type='text' name='fathername' value='$fname'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Mother_Name</label></td>" . "<td><input type='text' name='mothername' value='$mname'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Date_of_Birth</label></td>" . "<td><input type='date' name='dateofbirth' value='$dob'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Class_Roll_No</label></td>" . "<td><input type='number' name='rollno' value='$roll'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Branch</label></td>" . "<td><input type='text' value='$branch' name='branch'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Semester</label></td>" . "<td><input type='number' value='$sem' name='semester'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Category</label></td>" . "<td><input type='text' value='$category' name='category'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Address</label></td>" . "<td><input type='text' value='$address' name='address'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Phone number</label></td>" . "<td><input type='number' value='$number' name='pnumber'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Gender</label></td>" ."<td><input type='text' name='gender' value='$gender'></td></tr><br>";
		          echo "<button type='submit' name='update'>Update Data</button>";
		          echo '</table>';
		        }
		}
		?>
			<?php
			  if (isset($_POST['update'])) {
			         $sn=$_POST['studentname'];
			         $fn=$_POST['fathername'];
			         $mn=$_POST['mothername'];
			         $da=$_POST['dateofbirth'];
			         $rn=$_POST['rollno'];
			         $bh=$_POST['branch'];
			         $se=$_POST['semester'];
			         $ca=$_POST['category'];
			         $add=$_POST['address'];
			         $phone=$_POST['pnumber'];
			         $query="UPDATE samplee SET Name='$sn',Father_Name='$fn',Mother_Name='$mn',Date_of_Birth='$da',Class_Roll_No='$rn',Branch='$bh',Semester='$se',Category='$ca',Address='$add',Phone_Number='$phone'";
			         $data=mysqli_query($connection,$query);
			         if ($data)
			         {
			           echo '<script>alert("Data Updated")</script>';
			         }
			     
			 	}
			
			 	
			   ?>
	</form>
</body>
</html>