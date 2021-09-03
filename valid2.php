<?p

session_start();


$con = mysqli_connect('localhost','root','12151');
mysqli_select_db($con,'userregisteration');
$name = $_POST['user'];
$pass = $_POST['user'];

$s = "select * from usertable where name = '$name'";
$result = mysqli_query($con,$s);
$num=mysql_num_rows($result);

if($sum == 1){
	echo"Username Already Taken"
}else{
	$reg="insert into usertable(name , password) values('$name','$pass')";
    mysqli_query($con,$reg);
    echo"Thank You";
}
?>