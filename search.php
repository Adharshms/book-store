

<?php 
$link = mysqli_connect("localhost", "root", "", "onlinebookstore");
if ($link === false) { 
	die("ERROR: Could not connect. "
				.mysqli_connect_error()); 
} 
$sql = "SELECT * FROM book where title like '%text%'"; 
if ($res = mysqli_query($link, $sql)) { 
	if (mysqli_num_rows($res) > 0) { 
		echo "<table>"; 
		echo "<table border = '1'>";
		echo "<tr>"; 
		echo "<th>booknum</th>"; 
		echo "<th>title</th>  "; 
		echo "<th>author</th>"; 
      echo "<th>price</th>"; 
		echo "</tr>"; 
		while ($row = mysqli_fetch_array($res)) { 
			echo "<tr>"; 
			echo "<td>".$row['booknum']."</td>"; 
			echo "<td>".$row['title']."</td>  "; 
			echo "<td>".$row['author']."</td>"; 
         echo "<td>".$row['price']."</td>"; 
			echo "</tr>"; 
		} 
		echo "</table>"; 
		mysqli_free_result($res); 
		

		
	} 
	else { 
		echo "No matching records are found."; 
	} 
} 
else { 
	echo "ERROR: Could not able to execute $sql. "
								.mysqli_error($link); 
} 


?> 
