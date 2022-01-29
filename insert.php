<?php
require_once('db.php');

if (isset($_POST['submit'])) {
  $Name = $_POST['Name'];
  $matric_number = $_POST['matric_number'];
  $course_subject = $_POST['course_subject'];
  $faculty = $_POST['faculty'];

  $sql = "INSERT INTO `fyp2`(`Name`, `matric_number`, `course_subject`, `faculty`,) VALUES ('$Name','$matric_number','$course_subject','$faculty')";
  if ($con->query($sql) === TRUE) {
    echo "Added to Database";
  }else {
    echo "somthing went wrong";
  }
}else {
  echo "no submit";
}
?>
