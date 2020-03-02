<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Semester</title>
    <style media="screen">
      *
      {
        margin:10px;
      }
      body 
      {
          background-image: url('back_dark.png');
          background-size: cover;
          color: #fff!important;
      }
      .delete
      {
        text-align: center;
        font-size: 50px;        
      }
      .sem
      {
        margin-left: 700px;
        font-size: 30px;

      }
      .inut
      {
        margin-left: 10px;
      }
      .first
      {
        margin-left: 5px;
        font-size: 26px;
      }
      .inuts
      {
        margin-top: 20px;
        margin-left: 830px;
      }
      .second
      {
        font-size: 26px;
        margin-left: 5px;
      }
      .inutt
      {
        margin-top: 20px;
        margin-left: 830px;
      }
      .third
      {
        font-size: 26px;
        margin-left: 5px;
      }
      .inutf
      {
        margin-top: 20px;
        margin-left: 830px;
      }
      .fourth
      {
        font-size: 26px;
        margin-left: 5px;
      }
      .inutff
      {
        margin-top: 20px;
        margin-left: 830px;
      }
      .fifth
      {
        font-size: 26px;
        margin-left: 5px;
      }
      .inutsi
      {
        margin-top: 20px;
        margin-left: 830px;
      }
      .sixth
      {
        font-size: 26px;
        margin-left: 5px;
      }
      .button1
      {
          font-size: 30px;
          margin-left: 730px;
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
    <form class="" action="" method="post">
      <h1 class="delete">Delete Semester</h1>
      <span class="sem">Semester</span><input class="inut" type="radio" name="sem" value="1" required><span class="first">1</span><br>
      <input class="inuts" type="radio" name="sem" value="2" required><span class="second">2</span><br>
      <input class="inutt" type="radio" name="sem" value="3" required><span class="third">3</span><br>
      <input class="inutf" type="radio" name="sem" value="4" required><span class="fourth">4</span><br>
      <input class="inutff" type="radio" name="sem" value="5" required><span class="fifth">5</span><br>
      <input class="inutsi" type="radio" name="sem" value="6" required><span class="sixth">6</span><br>
      <button type="submit" class="button1" name="button">Submit</button>
    </form>
  </body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sample";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn) {
  if (isset($_POST['button'])) {
    $se=$_POST['sem'];
    $sql="DELETE FROM samplee WHERE Semester=$se";
    $data=mysqli_query($conn,$sql);
    if ($data) {
      echo "Data Deleted";
    }
    else {
      echo "Data Not Deleted";
    }
  }
}
else {
  echo "Connection Aborted";
}

 ?>
