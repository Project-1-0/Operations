<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fetch Values(Category)</title>
    <link rel="stylesheet" href="category.css">
  </head>
  <body>
    <form class="" action="" method="post">
      <!-- <div class="header"><img src="header.png"></div>

      <div class="nav-bar">
        <a href="login.php">Home</a>
        <a href="view_record.php" class="active">View Record</a>
        <a href="exam_form.php">Fill Exams Form</a>
        <a href="fill_result.php">Fill Result</a>
        <a href="struck_off.html">Struck-off Notice</a>
        <a href="prov.php">Provisional</a>
      </div> -->
      <div class="main">
        <span class="select">Select the Category:</span><input  class="sccat" type="radio" name="cat" value="SC" required><span class="sc">Scheduled Caste</span><br>
                              <input type="radio" class="stcat" name="cat" value="ST" required><span class="st">Scheduled Tribe</span> <br>
                              <input type="radio" name="cat" value="OBC" class="obccat"required><span class="obc">Other Backward Class </span><br>
                              <input type="radio" name="cat" value="General" class="urcat" required><span class="ur">General</span> <br>
                              <input type="radio" name="cat" value="Fee Weaver" class="feecat"><span class="fw">Fee Waiver</span><br>
      </div>
      <div class="selectbranch">
        <span class="selectbran">Select The Branch:</span><input class="computer" type="radio" name="bran" value="Computer" required><span class="compbran">Computer Branch </span><br>
                            <input type="radio" name="bran" value="Electrical" class="electrical" required><span class="elebran">Electrical Branch</span><br>
      </div>

        <button type="submit" class="button1" name="button">View Records</button>

      </div>
      </form>
  </body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sample";
$connection=mysqli_connect($servername,$username,$password,$dbname);
if ($connection) {
  if (isset($_POST['button'])) {
        $cat=$_POST['cat'];
        $bran=$_POST['bran'];
        $query="SELECT * FROM samplee WHERE Category='$cat' and Branch='$bran'";
        $data=mysqli_query($connection,$query);
        echo '<div class="view">';
        while ($dat = mysqli_fetch_array($data)) {
          echo '<table border="5"  cellspacing="3" bgcolor="Black">';
          echo '<tr><td><label class="lab">Registeration number</label></td>'. '<td><label class="val">'.$dat[0].'</label></td></tr><br>';
          echo "<tr><td><label class='lab'>Name</label></td>". '<td><label class="val">'. $dat[1]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Father_Name</label></td>' . '<td><label class="val">'. $dat[2]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Mother_Name</label></td>' . '<td><label class="val">'. $dat[3]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Date_of_Birth</label></td>' . '<td><label class="val">'. $dat[4]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Class_Roll_No</label></td>' . '<td><label class="val">'. $dat[5]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Branch</label></td>' . '<td><label class="val">'. $dat[6]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Semester</label></td>' . '<td><label class="val">'. $dat[7]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Category</label></td>' . '<td><label class="val">'. $dat[8]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Address</label></td>' . '<td><label class="val">'. $dat[9]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Phone number</label></td>' . '<td><label class="val">'. $dat[10]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Gender</label></td>' . '<td><label class="val">'. $dat[11]. '</label></td></tr><br>';
          echo '</table>';
        }
}
}
else {
echo "Not connected";
}?>
