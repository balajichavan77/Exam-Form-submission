<?php
if(isset($_POST['exam_year'],$_POST['fname'],$_POST['mname'],$_POST['lname'],$_POST['mother_name'],$_POST['dob'],$_POST['gender'],$_POST['email'],$_POST['phone_num'],$_POST['address'],$_POST['caste'],$_POST['exam_name'],$_POST['seat_num'],$_POST['month_year'],$_POST['college'],$_POST['board'],$_POST['result'],$_POST['course'],$_POST['year'],$_POST['sem']))
{
  $exam_year = $_POST['exam_year'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $mother_name = $_POST['mother_name'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone_num = $_POST['phone_num'];
  $address = $_POST['address'];
  $caste = $_POST['caste'];
  $exam_name = $_POST['exam_name'];
  $seat_num = $_POST['seat_num'];
  $month_year = $_POST['month_year'];
  $college = $_POST['college'];
  $board = $_POST['board'];
  $result = $_POST['result'];
  $course = $_POST['course'];
  $year = $_POST['year'];
  $sem = $_POST['sem'];
  $sub = $_POST['sub'];

  $con = mysqli_connect("localhost","root","","crs");

  if(!$con)
    die("Connection Failed");

  $sql = "INSERT INTO examform VALUES('$exam_year','$fname','$mname','$lname','$mother_name','$dob',
        '$gender','$email','$phone_num','$address','$caste','$exam_name','$seat_num','$month_year',
        '$college','$board','$result','$course','$year','$sem','$sub')";

$result=mysqli_query($con,$sql);
   if($con->query($sql) === TRUE)
   {
       header("Location: exam_form1.php?success=Your Examination Form Submitted successfully");
       exit();
    }
    else
    {
       header("Location: exam_form1.php?error=Unknown error occured");
       exit();
    }
}

?>
