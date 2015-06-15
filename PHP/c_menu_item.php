<?php

	class Menu_item {
		// Membres
		var $_name;
        var $_title;
		var $_link;
		var $_subitems;
        var $_selected;
        var $_force_display;
		
		// Constructeur
		function Menu_item ($name, $title, $link, $subitems) 
		{
            $this->_name     = $name;
            $this->_title       = $title;
            $this->_link        = $link;
            $this->_subitems = $subitems;
            $this->_selected = false;
            $this->_force_display = false;
		}
        
        function compute_selected($page_name, $niveau)
        {
            // Réinitialise par défaut
            $this->_selected = false;
            $this->_force_display = false;
            
            // On regarde si l'item courant est la page affichée
            if ($page_name == $this->_link)
            {
                $this->_selected = true;
            }
            
            // On regarde les sous-items
            foreach ($this->_subitems as $item) 
            {
                $item->compute_selected($page_name, $niveau+1);
                if ($item->_selected == true)
                {
                    $this->_selected = true;
                }
            }
            
            // Pour les niveaux 2 et 3 : on force l'affichage si un item est sélectionné
            if ($niveau > 1 and $this->_selected)
            {
                $this->_force_display = true;
                foreach ($this->_subitems as $item) 
                {
                    $item->_force_display = true;
                }
            }
        }
        
        // Affichage du menu horizontal
        function print_($count)
        {
            if ($this->_selected)
            {
                echo "<li class=\"select\">";
            }
            else
            {
                echo "<li>";
            }
            echo "    <a href=\"".$this->_link."\" title=\"".$this->_title."\">".$this->_name."</a>";
            if (count($this->_subitems) != 0)
            {
                echo "<ul class=\"niveau".$count."\">";
                foreach ($this->_subitems as $item) 
                {
                    $item->print_($count+1);
                }
                echo "</ul>";
            }
            echo "</li>";
        }
        
        // Affichage du menu vertical (à gauche)
        function print_left($count, $forcedisplay)
        {
            if ($this->_selected or $forcedisplay)
            {
                // affichage du niveau 0
                if ($count == 0)
                {
                    echo "<div id=\"menugaucheitem\">";	
                    echo "<div id=\"menutitle\">".$this->_name."</div>";
                }
                // affichage du niveau 1
                if ($count == 1)
                {
                    if ($this->_selected)
                    {
                        echo "<div id=\"menuitem1\" class=\"select\">";
                    }
                    else
                    {
                        echo "<div id=\"menuitem1\">";
                    }
                    echo "<a href=\"".$this->_link."\" title=\"".$this->_title."\">".$this->_name."</a>";
                    echo "</div>";
                }
                // affichage du niveau 2
                if ($count == 2)
                {
                    if ($this->_selected)
                    {
                        echo "<div id=\"menuitem2\" class=\"select\">";
                    }
                    else
                    {
                        echo "<div id=\"menuitem2\">";
                    }
                    echo "<a href=\"".$this->_link."\" title=\"".$this->_title."\">".$this->_name."</a>";
                    echo "</div>";
                }
                // affichage du niveau 3
                if ($count == 3 and $this->_force_display)
                {
                    if ($this->_selected)
                    {
                        echo "<div id=\"menuitem3\" class=\"select\">";
                    }
                    else
                    {
                        echo "<div id=\"menuitem3\">";
                    }
                    echo "<a href=\"".$this->_link."\" title=\"".$this->_title."\">".$this->_name."</a>";
                    echo "</div>";
                }
                if ($count != 1 or $this->_selected)
                {
                    foreach ($this->_subitems as $item) 
                    {
                        $item->print_left($count+1, true);
                    }
                }
                if ($count == 0)
                {
                    echo "</div>";
                }
            }
        }
	}

?>