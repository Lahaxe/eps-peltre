
<body>
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