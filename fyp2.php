<?php
require_once('db.php');

if (isset($_POST['submit'])) {
  $Name = $_POST['Name'];
  $matric_number = $_POST['matric_number'];
  $course_subject = $_POST['course_subject'];
  $faculty = $_POST['faculty'];
  $file = $_POST['file'];

  $sql = "INSERT INTO `fyp2`(`Name`, `matric_number`, `course_subject`, `faculty`, `file`) VALUES ('$Name','$matric_number','$course_subject','$faculty','$file')";
  if ($con->query($sql) === TRUE) {
    echo "Added to Database";
  }else {
    echo "somthing went wrong";
  }
}else {
  echo "no submit";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
  </head>
  <body>
    <div class="box">
      <div class="container">
        <div class="row">
          <div class="head head-fyp1">
            <div class="title-fyp1">
              <h1>FYP Evaluator</h1>
            </div>
            <ul class="first-ul">
              <a href="fyp1.html"><i class="fa fa-arrow-left"></i></a>
              <a href="evaluator.html"><i class="fa fa-arrow-right"></i></a>
              <a href="#"><i class="fa fa-close"></i></a>
              <a href="index.html"><i class="fa fa-home"></i></a>
              <a href="#"><i class="fa fa-search"></i></a>
            </ul>
          </div>
          <div class="body">
            <div class="body-title-fyp1">
              <h1>Evauator dashboard</h1>
            </div>
            <div class="body-head">
                <div class="image">
                  <img src="ufk.jpg" alt="">
                </div>
                <div class="title">
                  <h1>FYP2</h1>
                </div>
                <div class="user">
                  <i class="fa fa-user"></i>
                  <p>Name</p>
                </div>
            </div>
            <div class="content-fyp1">
              <form class="form-fyp2" action="" method="post">
                <div class="form-content">
                  <input type="text" name="Name" value="" placeholder="name">
                  <input type="text" name="matric_number" value="" placeholder="Matric Number">
                  <input type="text" name="course_subject" value="" placeholder="Course Subject">
                  <input type="text" name="faculty" value="" placeholder="Faculty">
                </div>
                <div class="note">
                  <input type="file" name="file" value="Note">
                </div>
                <div class="button-fyp2">
                  <button type="submit" name="button">Approve</button>
                </div>
              </form>
            </div>
          </div>
          <div class="footer">

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
