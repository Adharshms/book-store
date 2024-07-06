
 <html>
 </head>
 <style >
	h1{text-align: center;
	 font-size: 60px;
	 font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}
	form{text-align:center;
		font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	}
	input{font-size: 17px;}
	button{text-align: center;
		font-size:20px;}
		h3{
			font-size: 16px;
			text-align: center;
			
		}
	</style>
	<body bgcolor=" rgba(17, 150, 61, 0.655)">
   <h1 style="color:green">Datas in the table </h1>
   <h3 style="color:red">double tap search button to show table</h3>
   <form  action=" " method="post">
      <input style="background-color:rgb(38, 184, 87)" type="text" name="search" class="search" placeholder="Search here!">
      <input type="submit" name="submit" class="submit" value="search">

   </form>
   
   <br><br>
   
   <style>
      table {
         border-style: solid;
         border-width: 4px;
         border-color: black;
         text-align: center;
         font-size: xx-large;
         background-color: green;
		 
      }
   </style>
   <form action=" " method="post">
   <button  style="background-color:red"type="submit"><a href="page3.php">purchase</a></button>
</form>
	</body>
</html>
 
 <?php 
 $link = mysqli_connect("localhost", "root", "", "onlinebookstore");
 if ($link === false) { 
	die("ERROR: Could not connect. " . mysqli_connect_error()); 
 } 
 
 if(isset($_POST['submit'])){
	$search = $_POST['search'];
	$sql = "SELECT * FROM book WHERE title LIKE '%$search%'"; 
 
	if ($res = mysqli_query($link, $sql)) { 
	   if (mysqli_num_rows($res) > 0) { 
		  echo "<table>"; 
		  echo "<table border='1'>";
		  echo "<tr>"; 
		  echo "<th>booknum</th>"; 
		  echo "<th>title</th>"; 
		  echo "<th>author</th>"; 
		  echo "<th>price</th>"; 
		  echo "</tr>"; 
		  while ($row = mysqli_fetch_array($res)) { 
			 echo "<tr>"; 
			 echo "<td>".$row['booknum']."</td>"; 
			 echo "<td>".$row['title']."</td>"; 
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
	   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
	}
 }
 
 mysqli_close($link);
 ?>
 