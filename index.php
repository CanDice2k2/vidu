<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="index.php" method = "post">
      <label>username: </label><br>
      <input type="text" name = "username"><br>
      <label>phone: </label><br>
      <input type="text" name = "phone"><br>
      <label>address: </label><br>
      <input type="text" name = "address"><br>
      <input type= "submit" name = "login" value = "register">
   </form>   
</body>
</html>
<?php
   $host = 'localhost'; 
   $port = '5432';
   $database = 'test'; 
   $user = 'postgres'; 
   $password = '123456'; 
   $connectionString = "host=$host port=$port dbname=$database user=$user password=$password";
   $conn = pg_connect($connectionString);
   
   $name = $_POST['username'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   
   $query1 = "insert into usertable(name, phone_num, address) values('$name','$phone','$address')";
   pg_query($conn, $query1);
   $query2 = "select * from usertable";
   $result = pg_query($conn, $query2);
   var_dump($result);
   while($temp = pg_fetch_assoc($result)){
     echo $temp['id'] . " " . $temp['name'] . " " . $temp['phone_num'] . " " . $temp['address'] . "<br>";
   }
   
?>