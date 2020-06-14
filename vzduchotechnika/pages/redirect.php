<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Redirect</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>
    <body style="width:400px;margin:auto;padding:40px;background-color:burlywood; font-family:Arial black;">
<?php
$name = filter_input(INPUT_POST, 'name');
$user_name = filter_input(INPUT_POST, 'user_name');
$password = filter_input(INPUT_POST, 'password');


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "vzduchotechnika";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO login_user (name, user_name, password)
values ('$name','$user_name','$password')";
if ($conn->query($sql)){
header( "refresh:3;url=login.php" );
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}



?>
<div class="alert alert-primary" role="alert">
  Úspešne ste sa zaregistrovali. 
</div>
      
    </body>
</html>