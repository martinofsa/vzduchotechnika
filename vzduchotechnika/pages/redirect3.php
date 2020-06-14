<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Redirect</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>
    <body style="width:400px;margin:auto;padding:40px;background-color:burlywood; font-family:Arial black;">
<?php
$nazov_obrazka = filter_input(INPUT_POST, 'nazov_obrazka');



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
$sql = "INSERT INTO gallery (nazov_obrazka)
values ('$nazov_obrazka')";
if ($conn->query($sql)){
header( "refresh:3;url=main.php" );
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}



?>
<div class="alert alert-primary" role="alert">
  Pridali ste obr�zok
</div>
      
    </body>
</html>