	<!-- _______________________________________________________________________________________________________________________________________________________ -->
	<div id="cadremenu">	
		<div id="menu">	
			<div id="menutitle">
				Retour
			</div>
			<div id="menuitem">
				<a href="http://www.ndpeltre.info/" title="Site de Notre-Dame de Peltre">Notre-Dame</a>
			</div>
		</div>
		
<?php 
	if ($mg_item == "bilan")
	{
	?>
		      <div id="menu">	
        <div id="menutitle">
          Bilans
        </div>
        <div id="menuitem">
          <a href="bilan0607.php" title="Bilan 2006-2007">Bilan 2006-2007</a>
        </div>
        <div id="menuitem">
          <a href="bilan0708.php" title="Bilan 2007-2008">Bilan 2007-2008</a>
        </div>
        <div id="menuitem">
          <a href="bilan0809.php" title="Bilan 2008-2009">Bilan 2008-2009</a>
        </div>
        <div id="menuitem">
          <a href="bilan0910.php" title="Bilan 2009-2010">Bilan 2009-2010</a>
        </div>
      </div>
      
     <?php 
      }
      elseif ($mg_item == "resultat")
	{
      ?>
	<div id="menu">	
        <div id="menutitle">
          Résultats
        </div>
	<div id="menuitem">
	<a href="Resultatscrossnat.php" title="Cross">Cross</a>
        </div>
	<?php 
	if ($mg_subitem == "cross")
	{
		if ($mg_selectitem == "interclasse")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatscrossnd.php\" title=\"Cross\">Inter-classes</a>";
		echo "</div>";
		if ($mg_selectitem == "departemental")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatscrossdep.php\" title=\"Cross\">Départemental</a>";
		echo "</div>";
		if ($mg_selectitem == "regional")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatscrossreg.php\" title=\"Cross\">Régional</a>";
		echo "</div>";
		if ($mg_selectitem == "national")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatscrossnat.php\" title=\"Cross\">National</a>";
		echo "</div>";
	}
	?>
        <div id="menuitem">
          <a href="Resultatsbadnat.php" title="Badminton">Badminton</a>
        </div>
	<?php 
	if ($mg_subitem == "badminton")
	{
		if ($mg_selectitem == "departemental")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsbaddep.php\" title=\"Badminton\">Départemental</a>";
		echo "</div>";
		if ($mg_selectitem == "regional")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsbadreg.php\" title=\"Badminton\">Régional</a>";
		echo "</div>";
		if ($mg_selectitem == "national")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsbadnat.php\" title=\"Badminton\">National</a>";
		echo "</div>";
	}
	?>
        <div id="menuitem">
          <a href="Resultatsttdep.php" title="Tennis de Table">Tennis de Table</a>
        </div>
	<?php 
	if ($mg_subitem == "pingpong")
	{
		if ($mg_selectitem == "departemental")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsttdep.php\" title=\"Tennis de Table\">Départemental</a>";
		echo "</div>";
		if ($mg_selectitem == "regional")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsttreg.php\" title=\"Tennis de Table\">Régional</a>";
		echo "</div>";
	}
	?>
        <div id="menuitem">
          <a href="Resultatshand.php" title="Sports collectifs">Sports collectifs</a>
        </div>
	<?php 
	if ($mg_subitem == "sportco")
	{
		if ($mg_selectitem == "hand")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatshand.php\" title=\"Hand Ball\">Hand Ball</a>";
		echo "</div>";
		if ($mg_selectitem == "foot")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsfoot.php\" title=\"Foot Ball\">Foot Ball</a>";
		echo "</div>";
	}
	?>
        <div id="menuitem">
          <a href="Resultatsjudoreg.php" title="Judo">Judo</a>
        </div>
        <div id="menuitem">
          <a href="Resultatsnatnat.php" title="Natation">Natation</a>
        </div>
	<?php 
	if ($mg_subitem == "natation")
	{
		if ($mg_selectitem == "departemental")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsnatdep.php\" title=\"Natation\">Départemental</a>";
		echo "</div>";
		if ($mg_selectitem == "regional")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsnatreg.php\" title=\"Natation\">Régional</a>";
		echo "</div>";
		if ($mg_selectitem == "national")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsnatnat.php\" title=\"Natation\">National</a>";
		echo "</div>";
	}
	?>
        <div id="menuitem">
          <a href="Resultatsathldep.php" title="Athlétisme">Athlétisme</a>
        </div>
	<?php 
	if ($mg_subitem == "athletisme")
	{
		if ($mg_selectitem == "en salle")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsathlsalle.php\" title=\"Athlétisme\">En Salle</a>";
		echo "</div>";
		if ($mg_selectitem == "departemental")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsathldep.php\" title=\"Athlétisme\">Départemental</a>";
		echo "</div>";
		if ($mg_selectitem == "regional")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatsathlreg.php\" title=\"Athlétisme\">Régional</a>";
		echo "</div>";
	}
	?>
        <div id="menuitem">
          <a href="Resultatstendep.php" title="Tennis">Tennis</a>
        </div>
	<?php 
	if ($mg_subitem == "tennis")
	{
		if ($mg_selectitem == "departemental")
		{
			echo "<div id=\"menusubitemselect\">";
		}
		else
		{
			echo "<div id=\"menusubitem\">";
		}
		echo "<a href=\"Resultatstendep.php\" title=\"Tennis\">Départemental</a>";
		echo "</div>";
	}
	?>
      </div>
      
     <?php 
      }
      ?>
	</div>
	
	<div id="cadrecorps">
		<div id="topbody"></div>
		<div id="corps">
		
<?php 
	require_once "PHP/f_commentaire.php";
	
	if (isset($_POST['comm_ref']))
		enregistrerComm(new Commentaire(-1, $_POST['comm_ref'], date("Y-m-d H:i:s"), $_POST['comm_name'], $_POST['comm_text'], 0));
  ?>