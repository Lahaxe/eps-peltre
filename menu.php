<div id="menubanniere">
<?php
	require_once "PHP/f_header.php";
	
	$nbimage=count_files("photo/");
	
	$nbun=rand(1,$nbimage);
	
	$nbdeux=rand(1,$nbimage);
	while ($nbdeux==$nbun)
	{
		$nbdeux=rand(1,$nbimage);
	}
	
	$nbtrois=rand(1,$nbimage);
	while (($nbdeux==$nbtrois) || ($nbtrois==$nbun))
	{
		$nbtrois=rand(1,$nbimage);
	}
	
	$nbquatre=rand(1,$nbimage);
	while (($nbdeux==$nbquatre) || ($nbun==$nbquatre) || ($nbtrois==$nbquatre))
	{
		$nbquatre=rand(1,$nbimage);
	}
  ?>
   
   <!-- _______________________________________________________________________________________________________________________________________________________ -->
	<div id="banniere">
		<img src="photo/<?php echo $nbun; ?>.jpg" alt="Erreur" title="photo/<?php echo $nbun; ?>.jpg" align="top" width="12%" height="100%" />
		<img SRC="photo/<?php echo $nbdeux; ?>.jpg" ALT="Erreur" TITLE="image" align="top" width="12%" height="100%" />
		<p class="left">
			<a href="http://eps.ndpeltre.info/" title="Page EPS">association sportive</a>
		</p>
		<img SRC="photo/<?php echo $nbtrois; ?>.jpg" ALT="Erreur" TITLE="image" align="top" width="12%" height="100%" />
		<img SRC="photo/<?php echo $nbquatre; ?>.jpg" ALT="Erreur" TITLE="image" align="top" width="12%" height="100%" />
	</div>
   <!-- _______________________________________________________________________________________________________________________________________________________ -->
   
	<div id="menuhaut">
			<ul class="niv1">
				<li class="imginline" align="left"><a href="http://www.ndpeltre.info/" title="Notre-Dame">
					<IMG SRC="images/logo.gif" ALT="Erreur" TITLE="retour nd peltre" align="top" width="45" height="45"></a>
				</li>
			</ul>
			<ul class="niv1">
				<li class="inline"><a href="http://eps.ndpeltre.info/" title="">Accueil</a>
				</li>
			</ul>
			<ul class="niv1">
				<li class="inline"><a href="convocation.php" title="">Convocation</a>
				</li>
			</ul>
			<ul class="niv1">
				<li class="inline"><a href="page_resultats.php" title="Résultats de l'AS">Résultats</a>
					<ul class="niv2">
						<li class="inline"><a href="Resultatscrossdep.php" title=""> Cross</a>
							<ul class="niv3">
								<li class="inline"><a href="Resultatscrossnd.php" title="">inter-classes</a></li>
								<li class="inline"><a href="Resultatscrossdep.php" title="">départemental</a></li>
								<li class="inline"><a href="Resultatscrossreg.php" title="">régional</a></li>
								<li class="inline"><a href="Resultatscrossnat.php" title="">national</a></li>
							</ul>
						</li>
						<li class="inline"><a href="Resultatsbaddep.php" title=""> badminton</a>
							<ul class="niv3">
								<li class="inline"><a href="Resultatsbaddep.php" title="">départemental</a></li>
								<li class="inline"><a href="Resultatsbadreg.php" title="">régional</a></li>
								<li class="inline"><a href="Resultatsbadnat.php" title="">national</a></li>
							</ul>
						</li>
						<li class="inline"><a href="Resultatsttdep.php" title="">tennis de table</a>
							<ul class="niv3">
								<li class="inline"><a href="Resultatsttdep.php" title="">départemental</a></li>
								<li class="inline"><a href="Resultatsttreg.php" title="">régional</a></li>
							</ul>
						</li>
						<li class="inline"><a href="Resultatshand.php" title=""> sports collectifs</a>
							<ul class="niv3">
								<li class="inline"><a href="Resultatshand.php" title="">hand-ball</a></li>
								<li class="inline"><a href="page_dattente.php" title="">foot-ball</a></li>
							</ul>
						</li>
						<li class="inline"><a href="Resultatsjudoreg.php" title=""> judo</a>
							<ul class="niv3">
								<li class="inline"><a href="Resultatsjudoreg.php" title="">régional</a></li>
								<li class="inline"><a href="page_dattente.php" title="">national</a></li>
							</ul>
						</li>
						<li class="inline"><a href="Resultatsnatdep.php" title=""> natation</a>
							<ul class="niv3">
								<li class="inline"><a href="Resultatsnatdep.php" title="">départemental</a></li>
								<li class="inline"><a href="Resultatsnatreg.php" title="">régional</a></li>
								<li class="inline"><a href="resultatsnatnat.php" title="">national</a></li>
							</ul>
						</li>
						<li class="inline"><a href="Resultatsathldep.php" title=""> athlétisme</a>
							<ul class="niv3">
								<li class="inline"><a href="Resultatsathlsalle.php" title="">en salle</a></li>
								<li class="inline"><a href="Resultatsathldep.php" title="">départemental</a></li>
								<li class="inline"><a href="Resultatsathlreg.php" title="">régional</a></li>
								<li class="inline"><a href="#" title="">records</a></li>
							</ul>
						</li>
						<li class="inline"><a href="Resultatstendep.php" title=""> tennis</a>
							<ul class="niv3">
								<li class="inline"><a href="Resultatstendep.php" title="">départemental</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			<ul class="niv1">
				<li class="inline"><a href="dates.php" title="">Dates à retenir</a>
				</li>
			</ul>
			<ul class="niv1">
				<li class="inline"><a href="bilans.php" title="">Bilans</a>
					<ul class="niv2">
						<li class="inline">
							<a href="bilan0607.php" title="Bilan 2006-2007">2006-2007</a>
						</li>
						<li class="inline">
							<a href="bilan0708.php" title="Bilan 2007-2008">2007-2008</a>
						</li>
						<li class="inline">
							<a href="bilan0809.php" title="Bilan 2008-2009">2008-2009</a>
						</li>
					</ul>
				</li>
			</ul>
			<ul class="niv1">
				<li class="inline"><a href="liens.php" title="">Liens</a>
				</li>
			</ul>
			<ul class="niv1">
				<li class="inlineend"><a href="contact.php" title="Me contacter">Contact</a>
				</li>
			</ul>
	</div>
   </div> 
   
   

