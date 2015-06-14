	<!-- _______________________________________________________________________________________________________________________________________________________ -->
    <div id="menugauche">	
        <div id="menugaucheitem">	
            <div id="menutitle">Retour</div>
            <div id="menuitem1">
                <a href="http://www.ndpeltre.info/" title="Site de Notre-Dame de Peltre">Notre-Dame</a>
            </div>
        </div>
		
<?php 
    foreach ($menu as $item) 
    {
        $item->print_left(0, false);
    }
?>
    </div>
	
    <div id="corps">
		