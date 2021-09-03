<?p

session_start();

$con = mysqli_connect('localhost','root','12151');

mysqli_select_db($con,'registration');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"Username Already Taken";
}else{
	$reg="insert into usertable(name , email , password) values ('$name','$email','$pass')";
	mysqli_query($con , $reg);
	echo" Registration Successful";
}
?>
