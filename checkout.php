<html>
Total amount=
</html>
<?php
session_start();
echo $_SESSION['total_amount'];

?>
<html>
<form action="minus.php">
	<input type="submit" value="pay" >
</form>
</html>