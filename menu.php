<?php
    $page_name = basename($_SERVER['PHP_SELF']);

    require_once "./PHP/c_menu_item.php";

    // Définition des noms des pages et des liens
    $menu=array();
    // Accueil
    $menu[] 	= new menu_item("accueil", "Accueil", "index.php", array());
    // Convocation
    $menu[] 	= new menu_item("Convocation", "Convocation", "convocation.php", array());
    // Resultats  (début)
    $menu_resultat=array();
    // Résultats Athlétisme
    $menu_resultat_athl=array();
    $menu_resultat_athl[] 	= new menu_item("En salle", "Athlétisme en salle", "Resultatsathlsalle.php", array());
    $menu_resultat_athl[] 	= new menu_item("Départemental", "Athlétisme Départemental", "Resultatsathldep.php", array());
    $menu_resultat_athl[] 	= new menu_item("Régional", "Athlétisme Régional", "Resultatsathlreg.php", array());
    // Records 
    $menu_resultat_athl_record=array();
    $menu_resultat_athl_record[] 	= new menu_item("Benjamines", "Records des Benjamines", "Resultatsathlrecordbenf.php", array());
    $menu_resultat_athl_record[] 	= new menu_item("Benjamins", "Records des Benjamins", "Resultatsathlrecordbeng.php", array());
    $menu_resultat_athl_record[] 	= new menu_item("Minimes filles", "Records des Minimes filles", "Resultatsathlrecordminf.php", array());
    $menu_resultat_athl_record[] 	= new menu_item("Minimes garçons", "Records des Minimes garçons", "Resultatsathlrecordming.php", array());
    $menu_resultat_athl_record[] 	= new menu_item("Cadettes", "Records des Cadettes", "Resultatsathlrecordcadf.php", array());
    $menu_resultat_athl_record[] 	= new menu_item("Cadets", "Records des Cadets", "Resultatsathlrecordcadg.php", array());
    $menu_resultat_athl_record[] 	= new menu_item("Junior filles", "Records des Junior filles", "Resultatsathlrecordjunf.php", array());
    $menu_resultat_athl_record[] 	= new menu_item("Junior garçons", "Records des Junior garçons", "Resultatsathlrecordjung.php", array());
    $menu_resultat_athl[] 	= new menu_item("Records", "Records d'Athlétisme", "Resultatsathlrecords.php", $menu_resultat_athl_record);
    $menu_resultat[] 	= new menu_item("Athlétisme", "Résultats de l'Athlétisme", "Resultatsathldep.php", $menu_resultat_athl);
    // Résultats Badminton
    $menu_resultat_bad=array();
    $menu_resultat_bad[] 	= new menu_item("Départemental", "Badminton Départemental", "Resultatsbaddep.php", array());
    $menu_resultat_bad[] 	= new menu_item("Régional", "Badminton Régional", "Resultatsbadreg.php", array());
    $menu_resultat_bad[] 	= new menu_item("National", "Badminton National", "Resultatsbadnat.php", array());
    $menu_resultat[] 	= new menu_item("Badminton", "Résultats du Badminton", "Resultatsbaddep.php", $menu_resultat_bad);
    // Résultats Cross
    $menu_resultat_cross=array();
    $menu_resultat_cross[] 	= new menu_item("Inter-Classes", "Cross Inter-Classes", "Resultatscrossnd.php", array());
    $menu_resultat_cross[] 	= new menu_item("Départemental", "Cross Départemental", "Resultatscrossdep.php", array());
    $menu_resultat_cross[] 	= new menu_item("Régional", "Cross Régional", "Resultatscrossreg.php", array());
    $menu_resultat_cross[] 	= new menu_item("National", "Cross National", "Resultatscrossnat.php", array());
    $menu_resultat[] 	= new menu_item("Cross", "Résultats du Cross", "Resultatscrossdep.php", $menu_resultat_cross);
    // Résultats Judo
    $menu_resultat_judo=array();
    $menu_resultat_judo[] 	= new menu_item("Régional", "Judo Régional", "Resultatsjudoreg.php", array());
    $menu_resultat[] 	= new menu_item("Judo", "Résultats du Judo", "Resultatsjudoreg.php", $menu_resultat_judo);
    // Résultats Natation
    $menu_resultat_nat=array();
    $menu_resultat_nat[] 	= new menu_item("Départemental", "Natation Départemental", "Resultatsnatdep.php", array());
    $menu_resultat_nat[] 	= new menu_item("Régional", "Natation Régional", "Resultatsnatreg.php", array());
    $menu_resultat_nat[] 	= new menu_item("National", "Natation National", "Resultatsnatnat.php", array());
    $menu_resultat[] 	= new menu_item("Natation", "Résultats de la Natation", "Resultatsnatdep.php", $menu_resultat_nat);
    // Résultats Sports Collectifs
    $menu_resultat_sportco=array();
    $menu_resultat_sportco[] 	= new menu_item("Hand-Ball", "Résultats du Hand-Ball", "Resultatshand.php", array());
    $menu_resultat_sportco[] 	= new menu_item("Foot-Ball", "Résultats du Foot-Ball", "Resultatsfoot.php", array());
    $menu_resultat[] 	= new menu_item("Sports Collectifs", "Résultats des Sports Collectifs", "Resultatshand.php", $menu_resultat_sportco);
    // Résultats Tennis
    $menu_resultat_tennis=array();
    $menu_resultat_tennis[] 	= new menu_item("Départemental", "Tennis Départemental", "Resultatstendep.php", array());
    $menu_resultat[] 	= new menu_item("Tennis", "Résultats du Tennis", "Resultatstendep.php", $menu_resultat_tennis);
    // Résultats Tennis de table
    $menu_resultat_tt=array();
    $menu_resultat_tt[] 	= new menu_item("Départemental", "Tennis de table Départemental", "Resultatsttdep.php", array());
    $menu_resultat_tt[] 	= new menu_item("Régional", "Tennis de table Régional", "Resultatsttreg.php", array());
    $menu_resultat[] 	= new menu_item("Tennis de table", "Résultats du Tennis de table", "Resultatsttdep.php", $menu_resultat_tt);
    $menu[] 	= new menu_item("Résultats", "Résultats", "resultats.php", $menu_resultat);
    // Resultats  (fin)
    // Dates
    $menu[] 	= new menu_item("date à retenir", "Date à retenir", "dates.php", array());
    // Bilans
    $menu_bilans=array();
    $menu_bilans[] 	= new menu_item("2006-2007", "Bilan de l'année 2006-2007", "bilan0607.php", array());
    $menu_bilans[] 	= new menu_item("2007-2008", "Bilan de l'année 2007-2008", "bilan0708.php", array());
    $menu_bilans[] 	= new menu_item("2008-2009", "Bilan de l'année 2008-2009", "bilan0809.php", array());
    $menu_bilans[] 	= new menu_item("2009-2010", "Bilan de l'année 2009-2010", "bilan0910.php", array());
    $menu[] 	= new menu_item("bilans", "Bilans", "bilans.php", $menu_bilans);
    // Liens
    $menu[] 	= new menu_item("liens", "Liens", "liens.php", array());
    // Contact
    $menu[] 	= new menu_item("contact", "Contact", "contact.php", array());
?>

    <div id="menutop">
        <ul id="menu">
            <li class="image">
                <a href="http://www.ndpeltre.info/" title="Notre-Dame">
                    <IMG SRC="images/logo.gif" ALT="Erreur" TITLE="retour nd peltre" align="center" width="40" height="40">
                </a>
            </li>
<?php
    foreach ($menu as $item) 
    {
        $item->compute_selected($page_name);
        $item->print_(2);
    }
?>
        </ul>
    </div>
