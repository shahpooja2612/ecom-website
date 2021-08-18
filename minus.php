<?php 
session_start();
echo "hello";
 $host = "localhost";
 $user = "root";
$password = "";
$db = "books";
$conn = mysqli_connect($host,$user,$password,$db);
echo $_SESSION['loggeduser'];
$query="select balance from login where username='".$_SESSION['loggeduser']."'";
echo $query;
	$result = mysqli_query($conn,$query) or die("error");

	if (!is_bool($result) && $result->num_rows > 0) {
		while($row=mysqli_fetch_assoc($result)) {
			//$resultset[] = $row;
			echo $row['balance'];
			$row['balance']-=$_SESSION['total_amount'];
			$query="update login set balance='".$row['balance']."' where username='".$_SESSION['loggeduser']."'";
			$result = mysqli_query($conn,$query) or die("error");
		//header('location:home.php');
		}		
	}
	else
	{
		//header('location:login.php');
	}
	

?>