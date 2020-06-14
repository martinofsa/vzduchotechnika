<!DOCTYPE html>
<html >
    <head>
    <title>Redirect</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>
    <body style="width:400px;margin:auto;padding:40px;background-color:burlywood; font-family:Arial black;">
<?php
$meno = filter_input(INPUT_POST, 'meno');
$email = filter_input(INPUT_POST, 'mail');
$text = filter_input(INPUT_POST, 'text');

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
$sql = "INSERT INTO recenzia (meno, mail, text)
values ('$meno','$email','$text')";
if ($conn->query($sql)){
header( "refresh:3;url=../index.php" );
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}



?>
<div class="alert alert-primary" role="alert">
  Úspešne ste pridali recenziu
</div>
      
    </body>
</html>