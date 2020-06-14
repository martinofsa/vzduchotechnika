<?php
session_start();

?>
<!DOCTYPE html>
<html >
<head>
<title>Backend</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
	<link rel="stylesheet" href="../css/my.css">
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    

</head>
<body style="margin:20px;">
<?php
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "vzduchotechnika";
            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                         }
            
         ?>
<?php
if($_SESSION["name"]) {
?>
Vitajte  <?php echo $_SESSION["name"]; ?>
    <br />
    <a href="logout.php" title="Logout"><button type="button" class="btn btn-danger odhlasenie">Odhlasenie</button> </a>
    <a href="../index.php" ><button type="button" class="btn btn-success odhlasenie">Hlavná stránka</button> </a>
    <p id="demo"></p>
    <script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>


<?php
}
?>
    <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">Uživatelia</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Galéria</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Správy</a> 
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-recenzie" role="tab" aria-controls="v-pills-messages" aria-selected="false">Recenzie</a> 
       
   
    </div>
      
  </div>
  <div class="col-5">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <table class="table table-dark">
  <thead>
      <tr>
      <th scope="col">id</th>
      <th scope="col">Meno</th>
      <th scope="col">Užívateľské meno</th>
      <th scope="col">Zmazanie užívateľa</th>
    </tr>
  </thead>
  <tbody>
       <?php
                                 $sql = "SELECT id, name, user_name FROM login_user";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
    
                                while($row = $result->fetch_assoc()) {
                                
                                ?>
                                  <tr>                                 
                                  <td><?php echo $row["id"]; ?></td>
                                  <td><?php echo $row["name"]; ?></td>
                                  <td><?php echo $row["user_name"]; ?></td>
                                  <?php echo "<td><a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Zmaž</a></td>";?>
                                  </tr>
                                <?php                               
                                }
                                } 
                               
         
                                ?>
    
  
  </tbody>
</table>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
           <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">názov obrázka</th>
      <th scope="col">Zmazanie obrázka </th>
    </tr>
  </thead>
 <tbody>
                <?php
                                 $sql = "SELECT id, nazov_obrazka FROM gallery";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
    
                                while($row = $result->fetch_assoc()) {
                                
                                ?>
                                  <tr>                                 
                                  <td><?php echo $row["id"]; ?></td>
                                  <td><?php echo $row["nazov_obrazka"]; ?></td>
                                  <?php echo "<td><a href='deleteobr.php?id=" . $row['id'] . "' class='btn btn-danger'>Zmazanie obrázka</a></td>";?>
                                  </tr>
                                <?php                               
                                }
                                } 
                               
         
                                ?>
   
  </tbody>
</table>
          <form method="post" action="redirect3.php" >
                            <div class="form-group">
                                <label for="formGroupExampleInput">Pridať obrázok</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="nazov_obrazka" required placeholder="názov.jpg">
                            </div>                        
                            <button type="submit" class="btn btn-primary" >Pridať</button>
                                
                        </form>
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Meno</th>
      <th scope="col">Email </th>
        <th scope="col">Predmet </th>
        <th scope="col">Text </th>
    </tr>
  </thead>
 <tbody>
                <?php
                                 $sql = "SELECT meno,email,predmet,text FROM kontakt;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
    
                                while($row = $result->fetch_assoc()) {
                                
                                ?>
                                  <tr>                                 
                                  <td><?php echo $row["meno"]; ?></td>
                                  <td><?php echo $row["email"]; ?></td>
                                  <td><?php echo $row["predmet"]; ?></td>
                                  <td><?php echo $row["text"]; ?></td>
                                      <?php
                                }
                                
                                } 
                               
         
                              ?>
   
  </tbody>
</table> 
      </div>
      <div class="tab-pane fade" id="v-pills-recenzie" role="tabpanel" aria-labelledby="v-pills-settings-tab">
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Meno</th>
      <th scope="col">Email </th>
        <th scope="col">Text </th>
        <th scope="col">Zmazanie</th>
    </tr>
  </thead>
 <tbody>
                <?php
                                 $sql = "SELECT id,meno,mail,text FROM recenzia;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
    
                                while($row = $result->fetch_assoc()) {
                                
                                ?>
                                  <tr>                                 
                                  <td><?php echo $row["meno"]; ?></td>
                                  <td><?php echo $row["mail"]; ?></td>                           
                                  <td><?php echo $row["text"]; ?></td>
                                  <?php echo "<td><a href='mazanie_recenzie.php?id=" . $row['id'] . "' class='btn btn-danger'>Zmazanie recenzie</a></td>";?>  
                                      <?php
                                }
                                
                                } 
                               
         
                              ?>
   
  </tbody>
</table> 

      </div>
    </div>
  </div>
</div>




	<script src="https://kit.fontawesome.com/e305db743a.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>