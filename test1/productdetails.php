<?php
//server connection
$servername = "localhost";
$username = "root";
//our database name
$dbname = "test1";
//there is no password in default
$password = "";

//get input from html using '$_POST[]'
$product_name = $_POST['p_name'];
$product_price = $_POST['p_price'];
$product_quantity = $_POST['p_quantity'];

//sql connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//in php we use '.' operator for string concatenation!
//store sql query in variable
//set id as empty because it is auto increment
$sql = "insert into product_details(product_id, product_name, product_price, product_quantity) values ('','".$product_name."', '".$product_price."', '".$product_quantity."')";

//query execution
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>