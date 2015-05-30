<?php

	class Commentaire {
		// Membres
		var $m__id;
		var $m__ref;
		var $m__date;
		var $m__pseudo;
		var $m__texte;
		var $m__valide;
		
		
		// Fonctions
		function Commentaire ($i__id, $i__ref, $i__date, $i__pseudo, $i__texte, $i__valide) 
		{
			$this->m__id 		= $i__id;
			$this->m__ref 		= $i__ref;
			$this->m__date 		= $i__date;
			$this->m__pseudo 	= $i__pseudo;
			$this->m__texte 		= $i__texte;
			$this->m__valide 	= $i__valide;
		}
	}

?>