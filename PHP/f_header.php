<?php
	function count_files($folder)
	{
		// ouverture du répertoire
		$rep = opendir($folder);
		if(!$rep)
			return '-1';
			// -1 pour les erreurs

		$nb_files = 0;
		// tant qu'il y a des fichiers
		while($file = readdir($rep))
		{
			// répertoires . et ..
			if($file == '.' || $file == '..')
				continue;
			$nb_files++;
		}
		// fermeture du rep
		closedir($rep);
		return $nb_files; 
	}
  ?>