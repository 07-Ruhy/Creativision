<?php
session_start();
echo $_SESSION["name"];
$n=$_SESSION["name"];
echo "successfully logged in";
$conn=mysqli_connect("localhost","root","","online");
$sql = "SELECT * FROM users Where username='$n'";
$result = mysqli_query($conn, $sql);
echo "<table border=1><tr><th>id</th><th>Username</th><th>Email</th></tr>";
if (mysqli_num_rows($result) > 0) 
	{
  // output data of each row
	while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>"."<td>id: " . $row["id"]."</td>". " <td>- Name: " . $row["username"]. "</td>" ."<td>".$row["email"]."</td>"."</tr>" ."<br>";
	}
	}
else
{
	header("lcoation:index.html");
}

?>

<html><a href="logout.php">Logout</a></html>