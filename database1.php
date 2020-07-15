<?phP
$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$e_mail=$_POST['email'];
$phone_no=$_POST['phone'];
$year_name=$_POST['year'];
$feedback=$_POST['Feedback'];
$branch_name=$_POST['branch'];
$regn_name=$_POST['regna'];
$password_name=$_POST['password'];
$con=mysqli_connect('127.0.0.1','root');
mysqli_select_db($con,'registration');
/*echo $first_name;
echo $last_name;
echo $e_mail;
echo $phone_no;
echo $year_name;
echo $feedback;
echo $branch_name;
echo $regn_name;
echo $password_name;*/
$q="insert into information (name,lastname,email,phone,year,feedback,regn,password,branch) values ('$first_name','$last_name','$e_mail','$phone_no','$year_name','$feedback','$regn_name','$password_name','$branch_name')";
$i=mysqli_query($con,$q);
mysqli_close($con);
header('location:done.html');
?>