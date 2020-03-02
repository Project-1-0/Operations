<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Student From Database</title>
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
      .heading
      {
        margin-left: 700px;
        font-size: 50px;
      }
      form
      {
        margin-top: 30px;
        margin-left: 500px;
        font-size: 26px;
      }
      .input
      {
        margin-left: 10px;
        font-size: 25px;
        width: 400px;
        border-radius: 10px;
        text-align: center;
      }
      .button1
      {
          font-size: 30px;
          margin-left: 180px;
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
        @media(max-width:800px)
        {
            .heading
              {
                margin-left: 70px;
                font-size: 20px;
              }
              form
              {
                margin-top: 30px;
                margin-left: 500px;
                font-size: 26px;
              }
              .input
              {
                margin-left: 10px;
                font-size: 25px;
                width: 400px;
                border-radius: 10px;
                text-align: center;
              }
              .button1
              {
                  font-size: 30px;
                  margin-left: 180px;
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
}
    </style>
  </head>
  <body>
    <h1 class="heading">Delete Student</h1>
    <form class="" action="" method="post">
      
      <span class="Register">Registeration Number</span> <input placeholder="Enter the Registration Number" type="text" class="input" name="reg" value="" required><br>
      <input type="Submit" name="send" class="button1" value="Submit">
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
  if (isset($_POST['send'])) {
    $se=$_POST['reg'];
    $sql="DELETE FROM samplee WHERE Register=$se";
    $data=mysqli_query($conn,$sql);
    if ($data) {
      echo "Student Deleted from Database";
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
