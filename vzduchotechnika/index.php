<!DOCTYPE html>
<html>
<head>
	<title>Vzduchotechnika Orava</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
	<link rel="stylesheet" href="css/my.css">
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

	<meta charset="UTF-8">
	
</head>
<body >
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
	
 		<div class="row" id="menu">
		    <header class="header">
  				<h1 class="logo">Vzduchotechnika Orava</h1>
				<input class="menu-btn" type="checkbox" id="menu-btn" />
				<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  				<ul class="menu">
				    <li><a href="#menu">Úvod</a></li>
				    <li><a href="#onas">O nás</a></li>
				    <li><a href="#sluzby">Služby</a></li>
				    <li><a href="#gallery">Galéria</a></li>
				    <li><a href="#kontakt">Kontakt</a></li>
					  <li><a href="#feedback">Recenzie</a></li>
					<li><a href="pages/login.php"><i class="fas fa-sign-in-alt"></i></a></li>
  				</ul>
			</header>
		</div>
  		<div class="row" id="carousel" >
			<div class="col-sm-12 ">
				<div class="d-none d-sm-block">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  style="width: 100%">
					  	<ol class="carousel-indicators">
					    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    	<li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
					  	</ol>
	  				<div class="carousel-inner">
	    				<div class="carousel-item active">
	      					<img src="img/1st.jpg" class="d-block w-100" alt="...">
	    				</div>
					    <div class="carousel-item">
					      	<img src="img/3st.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      	<img src="img/2st.jpg" class="d-block w-100" alt="...">
					    </div>
					</div>
	  				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
	  				</a>
				    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only" >Next</span>
				 	</a>
					</div>
				</div>		
			</div>
 		</div>
		<div class="row" id="prehlad">
			<div class="col-sm-12 nadpis">Čo robíme</div>
			<div class="col-sm-3 box">
				<div class="card" >
	  				<div class="card-body">
	    				<h5 class="ikona"><i class="fas fa-desktop"></i></h5>
	    				<h5 class="card_name">Návrh</h5>
	   					<p class="card-text">Klimatizácia pomáha k tepelnej pohode za každého počasia. Ako správne vybrať klimatizačnú jednotku a ako ju používať, aby vám prinášala čo najväčší úžitok. Z akých častí sa skladá a ako vlastne funguje.</p>
	    			</div>
				</div>
			</div>
			<div class="col-sm-3 box">
				<div class="card" >
	  				<div class="card-body">
	    				<h5 class="ikona"><i class="far fa-snowflake"></i></h5>
	    				<h5 class="card_name">Montáž</h5>
	   					<p class="card-text">Vykonávame kompletnú dodávku a montáž klimatizačných zariadení, chladiacich a tepelných čerpadiel, vzduchotechniky vrátane ich umiestnenia, zapojenie a uvedenie do prevádzky.</p>
	    			</div>
				</div>
			</div>
			<div class="col-sm-3 box">
				<div class="card" >
	  				<div class="card-body">
	    				<h5 class="ikona"><i class="fas fa-wrench"></i></h5>
	    				<h5 class="card_name">Servis</h5>
	   					<p class="card-text" id="onas">Poskytujeme plánovaný servis klimatizačných jednotiek, pravidelnú kontrolu úniku chladív a izolácie potrubia, ktorú je potrebné vykonať minimálne raz za rok.</p>
	    			</div>
				</div>
			</div>
			
 		</div>
 		<div class="row" id="about" >
 			<div class="col-sm-12 nadpis" >O nás</div>
			<div class="col-sm-12">
				<p class="about" id="sluzby">
				Dovoľujeme si Vám predstaviť ponuku spoločnosti Vzduchotechnika Orava ktorá Vám prináša moderné riešenie otázok súvisiacich s klimatizácou priestorov, vzduchotechnikou, chladením i centrálnymi vysávačmi.
Hlavnou činnosťou spoločnosti je dodávka klimatizačných a vzduchotechnických zariadení celých budov, kancelárií, hál, reštauračných zariadení, rodinných domov i bytov vrátane projektovej dokumentácie, montáže zariadenia, zaškolenia obsluhy a poskytnutia úplných servisných služieb. Ponúkame Vám klimatizačné zariadenia renomovaného svetového výrobcu Mitsubishi Electric (Japonsko) v priaznivých cenových relácia a špičkovej kvalite.
					</p></div>
 		</div>
 		<div class="row" id="services">
 			<div class="col-sm-12 nadpis">Naše služby</div>
		
			<div class="col-sm-2 box">
				<div class="card" >
	  				<div class="card-body">
	    				
	    				<h5 class="card_name">Montáž klimatizacie</h5>
	   					<p class="card-text">Vykonávame kompletnú dodávku a montáž, 
						  chladiacich a klimatizačných zariadení, vrátane ich umiestnenia,
						  zapojenie a uvedenie do prevádzky. Robíme dodávky a montáž rôznych druhov 
						  (Split, Multisplit, VRV…) a značiek. </p>
	    			</div>
				</div>
			</div>
			<div class="col-sm-2 box">
				<div class="card" >
	  				<div class="card-body">
	    				
	    				<h5 class="card_name">Montáž tepelných čerpadiel</h5>
	   					<p class="card-text">Vykonávame kompletnú dodávku a montáž tepelných čerpadiel. Tepelné čerpadlá sú ekonomicky výhodným riešením na kúrenie a ohrej úžitkovej vody. Spravidla montujeme tepelné čerpadlá založené na princípe vzduch-voda.</p>
	    			</div>
				</div>
			</div>
			<div class="col-sm-2 box">
				<div class="card" >
	  				<div class="card-body">
	    				
	    				<h5 class="card_name">Rekuperácia</h5>
	   					<p class="card-text">Ponúkame vlastnú výrobu, predaj, montáž a servis 
						  vzduchotechniky. VZT a rekuperačné zariadenie, zaisťuje trvalý prísun č
						  erstvého vzduchu do objektu. Môže byť použité s chladením, ohrievaním al
						  ebo odvlhčovaním vzduchu.</p>
	    			</div>
				</div>
			</div>
			<div class="col-sm-2 box">
				<div class="card" >
	  				<div class="card-body">
	    				
	    				<h5 class="card_name">Servis záručný i pozáručný</h5>
	   					<p class="card-text" >Poskytujeme pravidelnú údržbu, aby celý systém správne fungoval. 
						  Predchádzame tak poruchám a snažíme sa o dlhodobý a bezproblémový chod zariadenia.
Revízia tesnosti zariadení, čistenie filtrov.</p>
	    			</div>
				</div>
			</div>
			
 		</div>
 		<div class="row" id="gallery">
 			<div class="col-sm-12 nadpis">Galéria</div>
			<div class="col-sm-12">
				<?php
                                $sql = "SELECT nazov_obrazka FROM gallery";
                                 $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
									?>	<a href="img/<?php echo $row["nazov_obrazka"]; ?>" target="blank">
										<img src="img/<?php echo $row["nazov_obrazka"]; ?>" alt="item" class="galleryitem zoom" >
										</a>                                                
                                    <?php
                                    }
                                }                         
                            
                            ?>



			</div>
 		</div>
 		<div class="row" id="kontakt">
 			<div class="col-sm-12 nadpis">Kontaktujte nás</div>
			<div class="col-sm-5">
				<form method="post" action="pages/redirect2.php">
					<div class="form-group">
    					<label for="formGroupExampleInput">Vaše meno a priezvisko</label>
    					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Meno Priezvisko" name="meno">
  					</div>
  					<div class="form-group">
					    <label for="exampleFormControlInput1">Váš e-mail</label>
					    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="meno.priezvisko@gmail.com" name="email">
  					</div>
 					<div class="form-group">
					    <label for="formGroupExampleInput">Predmet správy</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Predmet" name="predmet">
					</div> 
  					<div class="form-group">
					    <label for="exampleFormControlTextarea1">Vaša správa</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tu popíšte Váš problém...." name="text"></textarea>
					</div>
  					<button type="submit" class="btn btn-secondary">Odoslať</button>
				</form>
			</div>
			<div class="col-sm-7">
				<p class="ikonka"><i class="fas fa-map-marker-alt "></i>  <p class="location"> Farský briežok 999/1, Zákamenné, 02956</p>
				<p class="ikonka"><i class="fas fa-phone-alt"></i> <p class="location"> 0945 254 368</p>
				<p class="ikonka"><i class="fas fa-envelope"></i> <p class="location"> vzduchotechnika@gmail.com</p>
				<div class="d-none d-sm-block">
					<div id="map-container-google-1" class="z-depth-1-half map-container" >
                    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2597.1292522906233!2d19.293065315116966!3d49.38754697125669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715ca83732b6915%3A0x145ab7dcf4739f40!2zT2JlY27DvSDDmnJhZA!5e0!3m2!1ssk!2ssk!4v1587489685507!5m2!1ssk!2ssk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
 		</div>
	<div class="row" id="feedback">
	<div class="col-sm-12 nadpis">Recenzie</div>
	<div class="col-sm-12">
	<?php
           $sql = "SELECT meno,text FROM recenzia";
           $result = mysqli_query($conn, $sql);
           if (mysqli_num_rows($result) > 0) {
                   while($row = mysqli_fetch_assoc($result)) {

	?>
				   <div class="card recenze" style="width: 17rem;">
		           <img src="img/user.png" class="card-img-top" style="width:70px; margin-top:10px;">
					   <ul class="list-group list-group-flush">
							<li class="list-group-item"><?php echo $row["meno"]; ?></li>
							<li class="list-group-item"><?php echo $row["text"]; ?></li>
						</ul>
				   </div>					
															
        <?php
                                    }
                                }                         
                            
                            ?>
	<br />
															
		<div class="nadpis"> <a href="pages/feedback.php"><i class="fas fa-plus nadpis"></i></a></div>		
	</div>	
		
  	</div>
		
	
		
 		<div class="row" id="footer">
		    <div class="col-sm-12">

		    </div>
		    
  		</div>
  	<script src="https://kit.fontawesome.com/e305db743a.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
