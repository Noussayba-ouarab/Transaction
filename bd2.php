<html>
<head>

<meta charset="UTF-8"> 
<title>  Bank transaction </title>

<link  href="customers.css" rel="stylesheet" type="text/css"></link>

</head>


<body>

<div class="t">
<h2> Bank transaction</h2>
 <div class="m">
 <ul>
  <li><a  href="Newpage.php">Home</a></li>
    <li><a  href="http://localhost:8085/First/bd2.php">Customers</a> </li>
	</ul>
</div>
</div>

<div class="u">
   <h3> Transfer money </h3>
   <form action="bd2.php" method="POST">
    <input id="name" type="text" placeholder="Enter your name" name="name"><br>
        <input id="n" type="text" placeholder="Enter the balance" name="n"><br>
            <button id="k" onclick="send();" name="k" > Send money</button>
		     <button id="l" onclick="see();" name="l" > See transaction</button>
			</form>

<?php

try{
$conn=new PDO('mysql:host=localhost;dbname=bd;pory=3306;charset=utf8', 'root', '');//connecxion de php avac la base de données


}
catch(PDOException $e)
{
echo 'Echec de la connexion:'.$e->getMessage();
}
if(isset($_POST['k'])){
$name=$_POST['name'];
$n=$_POST['n'];
	$sql="update  bank set Current_balance='$n'+Current_balance where name='$name'";
    $stmt=$conn->prepare($sql);
	$stmt->execute();
	
}
		
	
?>



</div>


<table class="design">

<tr>
<th>id </th>
<th>Name </th>
<th>Email </th>
<th>Current balance ($)</th>
</tr>
<?php
try{
$conn=new PDO('mysql:host=localhost;dbname=bd;pory=3306;charset=utf8', 'root', '');//connecxion de php avac la base de données


}
catch(PDOException $e)
{
echo 'Echec de la connexion:'.$e->getMessage();
}



	$sql="SELECT * FROM bank";
    $statement=$conn->prepare($sql);
	$statement->execute();
	$result=$statement->fetchAll(PDO::FETCH_OBJ);
	if($result){
		foreach($result as $row)
		{
		
       echo "<tr><td>".$row->id."</td><td>".$row->Name."</td><td>".$row->Email."</td><td>".$row->Current_balance."</td></tr>";
	}
	}
	


      else{
			echo "0 result";
		}


		
	
?>

</table>


<script src="nn.js"></script>



</body>
</html>
  
 