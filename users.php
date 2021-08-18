<html>
<head>
<style>
.x{
	display: inline-block;
}

</style>
</head>

<?php
$servername="localhost";
$username="root";
$password="";
$db="books";
$conn=new mysqli($servername,$username,$password,$db);
$connection = new mysqli('localhost', 'root', '', 'books');

$search = $_GET['search'];
// $search = $mysqli -> real_escape_string($search);

$query = "SELECT * FROM product WHERE name LIKE '%".$search."%'";
$result= $conn->query($query);

while($row = $result -> fetch_object()){
	?>
	<div class="x">
	<img src="<?php echo $row->image;?>" height="300" width="200">
	<p> <?php echo $row->name;
	          echo "<br>";
			  echo $row->price;
			  echo "<br>";
			  echo $row->code;
			  echo "<br>";
			  ?>
			 
	</p><br>
</div>
<?php } ?>
</html>
   
   
