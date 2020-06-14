<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('127.0.0.1:3306','root','','vzduchotechnika') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
} else {
$message = "Zadali ste nespravne meno alebo heslo";
}
}
if(isset($_SESSION["id"])) {
header("Location:main.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>User Login</title>
    <link href="../css/my.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
</head>
<body style="font-family: 'Bangers', cursive;">

    <form class="login" name="frmUser" method="post" action="">
        <div class="message"><?php if($message!="") { echo $message; } ?></div>
   
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Meno</label>
    <div class="col-sm-2">
      <input type="text" name="user_name" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Heslo</label>
    <div class="col-sm-2">
      <input type="password" name="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">
      <button type="submit" name="submit" class="btn btn-primary">Prihlásiť</button>
     <a href="register.php">Nemám učet</a>
 
    </div>
  </div>
</form>

    <?php
session_start();
?>

<?php
if($_SESSION["name"]) {
?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.</a>
<?php
}
?>
</body>
</html>

