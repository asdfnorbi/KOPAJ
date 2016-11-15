<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Károlyi piac</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="style.css" media="all"/>
	</head>
	<body>
		<div class="fejlec">
			<img src="karolyi.JPG" alt="karolyi"/>
		</div>
		<div class="menu">
			<div><a class="menupont" id="akt_oldal" href="index.php">Főoldal</a></div>
			<div><a class="menupont" href="index.php?menu=termekek">Termékek</a></div>
			<div><a class="menupont" href="index.php?menu=elerhetosegek">Elérhetőségek</a></div>
		</div>
		</br>
		<div class="tartalom">
			<div class="tartalom_bal">
				<div class="kategoriak">
					<div class="kategoriak_fejlec">
						KATEGÓRIÁK
					</div>
					<ul>
						<?php
							include_once "dbcon.php";

							$sql = "SELECT kategoria from termek group by kategoria";
							$eredmeny = mysql_query ( $sql);
							while($result = mysql_fetch_array($eredmeny)){
							echo "<li><a href='index.php?kategoria=".$result['kategoria']."'>".$result['kategoria']."</a></li>";

							}
						?>
					</ul>
				</div>
				<div class="kosar">
					<div class="kosar_fejlec">
						KOSÁR TARTALMA
					</div>
					tartalom...
				</div>
				<div class="kiemelt_termek">
					<div class="kiemelt_termek_fejlec">
						KIEMELT TERMÉKEK
					</div>
					tartalom...
				</div>
			</div>
			<div class="tartalom_jobb">
			<?php
			if(isset ($_GET['menu'])){
				if($_GET['menu']=='termekek'){
					$sql= "SELECT termeknev from termek;";
					$eredmeny = mysql_query($sql);
					while($result = mysql_fetch_array($eredmeny)){
						echo "<a href='index.php?menu=".$result['termeknev']."' style='color:black' >".$result['termeknev']."</a><br>";
					}
				}
				else if($_GET['menu']=='elerhetosegek'){
					include 'contact.php';
				}
				else{
				include 'egytermek.php';
				}
			
			}else if(isset($_GET['kategoria'])){
			}
			else{
				echo '
				<div class="kiemelt_ajanlat">
					<div class="kiemelt_ajanlat_fejlec">
						Kiemelt ajánlatok
					</div>
				</div>
				<div class="akcios_termekek">
					<div class="akcios_termekek_fejlec">
						Akciós termékek
					</div>
					<div class="akcios_termekek_tarolo">
						<div class="akc_term_fejlec">
							Termék neve
						</div>
						<div class="akc_term_kep">
							<img src="kepek/nyomtato.jpg" alt="hianyzik" width="150" height="100"/>
						</div>
						<div class="akc_term_atlatszo">
							AKCIÓS
						</div><div class="akc_term_atlatszo2">
							AKCIÓS
						</div>
						<div class="akc_term_leiras">
							Leírás
						</div>
						<div class="akc_term_arkosar">
							<div class="ar">
								ÁR Ft
							</div>
							<div class="kosarba">
								KOSÁRBA
							</div>
						</div>
					</div>
					
					<div class="akcios_termekek_tarolo">
						<div class="akc_term_fejlec">
							Termék neve
						</div>
						<div class="akc_term_kep">
							<img src="kepek/nyomtato.jpg" alt="hianyzik" width="150" height="100"/>
						</div>
						<div class="akc_term_atlatszo">
							AKCIÓS
						</div><div class="akc_term_atlatszo2">
							AKCIÓS
						</div>
						<div class="akc_term_leiras">
							Leírás
						</div>
						<div class="akc_term_arkosar">
							<div class="ar">
								ÁR Ft
							</div>
							<div class="kosarba">
								KOSÁRBA
							</div>
						</div>
					</div>
					
					<div class="akcios_termekek_tarolo">
						<div class="akc_term_fejlec">
							Termék neve
						</div>
						<div class="akc_term_kep">
							<img src="kepek/nyomtato.jpg" alt="hianyzik" width="150" height="100"/>
						</div>
						<div class="akc_term_atlatszo">
							AKCIÓS
						</div><div class="akc_term_atlatszo2">
							AKCIÓS
						</div>
						<div class="akc_term_leiras">
							Leírás
						</div>
						<div class="akc_term_arkosar">
							<div class="ar">
								ÁR Ft
							</div>
							<div class="kosarba">
								KOSÁRBA
							</div>
						</div>
					</div>
					
					<div class="akcios_termekek_tarolo">
						<div class="akc_term_fejlec">
							Termék neve
						</div>
						<div class="akc_term_kep">
							<img src="kepek/nyomtato.jpg" alt="hianyzik" width="150" height="100"/>
						</div>
						<div class="akc_term_atlatszo">
							AKCIÓS
						</div><div class="akc_term_atlatszo2">
							AKCIÓS
						</div>
						<div class="akc_term_leiras">
							Leírás
						</div>
						<div class="akc_term_arkosar">
							<div class="ar">
								ÁR Ft
							</div>
							<div class="kosarba">
								KOSÁRBA
							</div>
						</div>
					</div>
					</br>
					
					<div class="akcios_termekek_tarolo">
						<div class="akc_term_fejlec">
							Termék neve
						</div>
						<div class="akc_term_kep">
							<img src="kepek/nyomtato.jpg" alt="hianyzik" width="150" height="100"/>
						</div>
						<div class="akc_term_atlatszo">
							AKCIÓS
						</div><div class="akc_term_atlatszo2">
							AKCIÓS
						</div>
						<div class="akc_term_leiras">
							Leírás
						</div>
						<div class="akc_term_arkosar">
							<div class="ar">
								ÁR Ft
							</div>
							<div class="kosarba">
								KOSÁRBA
							</div>
						</div>
					</div>
					
					<div class="akcios_termekek_tarolo">
						<div class="akc_term_fejlec">
							Termék neve
						</div>
						<div class="akc_term_kep">
							<img src="kepek/nyomtato.jpg" alt="hianyzik" width="150" height="100"/>
						</div>
						<div class="akc_term_atlatszo">
							AKCIÓS
						</div><div class="akc_term_atlatszo2">
							AKCIÓS
						</div>
						<div class="akc_term_leiras">
							Leírás
						</div>
						<div class="akc_term_arkosar">
							<div class="ar">
								ÁR Ft
							</div>
							<div class="kosarba">
								KOSÁRBA
							</div>
						</div>
					</div>
					
					<div class="akcios_termekek_tarolo">
						<div class="akc_term_fejlec">
							Termék neve
						</div>
						<div class="akc_term_kep">
							<img src="kepek/nyomtato.jpg" alt="hianyzik" width="150" height="100"/>
						</div>
						<div class="akc_term_atlatszo">
							AKCIÓS
						</div><div class="akc_term_atlatszo2">
							AKCIÓS
						</div>
						<div class="akc_term_leiras">
							Leírás
						</div>
						<div class="akc_term_arkosar">
							<div class="ar">
								ÁR Ft
							</div>
							<div class="kosarba">
								KOSÁRBA
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>';
		}
		?>
		<div id="clear"></div>
	</body>
</html>