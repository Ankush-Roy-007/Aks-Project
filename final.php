<?phP
session_start();
$a=$_SESSION["regn"];
$b=$_POST['rating1'];
$c=$_POST['rating2'];
$d=$_POST['rating3'];
$e=$_POST['rating4'];
$con=mysqli_connect('127.0.0.1','root');
mysqli_select_db($con,'registration');
if("Teacher 1"==$_SESSION["yo"]){
$q="INSERT INTO `teacher 1`(`Regn no`, `Confidance`, `Behavior`, `Nature`, `Knowledge`) VALUES ('$a','$b','$c','$d','$e')";
}
else if("Teacher 2"==$_SESSION["yo"]){
$q="INSERT INTO `teacher 2`(`Regn no`, `Confidance`, `Behavior`, `Nature`, `Knowledge`) VALUES ('$a','$b','$c','$d','$e')";
}
else if("Teacher 3"==$_SESSION["yo"]){
$q="INSERT INTO `teacher 3`(`Regn no`, `Confidance`, `Behavior`, `Nature`, `Knowledge`) VALUES ('$a','$b','$c','$d','$e')";
}
$i=mysqli_query($con,$q);
header('location:thankyou.php');
mysqli_close($con);
?>