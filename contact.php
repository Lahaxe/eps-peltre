<?php
    require_once "header_begin.php";

    // Ajouter ici les feuilles de style spécifiques

    require_once "header_end.php";

    require_once "banniere.php";

    require_once "menu.php";

    require_once "menu_gauche.php";
?>
   
<?php
    require_once "PHP/f_contact.php";

    if (isset($_POST['mail'])) $mail = $_POST['mail']; else $mail = "";
    if (isset($_POST['objet'])) $objet = $_POST['objet']; else $objet = "";
    if (isset($_POST['message'])) $message = $_POST['message']; else $message = "";

    if (isset($_POST['ok']))
    {
        if ($mail != "" && $objet != "" && $message != "" && VerifierAdresseMail($mail))
        {
            mail("LAHAXE-LAURENT@wanadoo.fr", $objet, $message, "From:".$mail);
            $mail = "";
            $objet = "";
            $message = "";
            $bool = 1;
        }
        else
        {
            $bool = 2;
        }
    }
    else
    {
        $bool = 0;
    }
?>
   
   <!-- _______________________________________________________________________________________________________________________________________________________ -->

    <br>
    <h2>Contacter les professeurs d'EPS :</h2>
<?php
    if ($bool == 1)
    {
?>
        <p><span style="color:green;"><b>Votre message a bien &eacute;t&eacute; envoy&eacute;, merci !</b></span></p><br />
<?php
    }
    if ($bool == 2)
    {
?>
        <p><span style="color:red;"><b>Votre message n'a pas pu &ecirc;tre envoy&eacute;, merci de bien vouloir v&eacute;rifier le formulaire.</b></span></p><br />
<?php
    }
?>
    <blockquote>
        <form action='contact.php' method='post'>
            <p><input type="hidden" name="ok" value="1" /></p>
            <table>
                <tr>
                    <td>Votre email </td>
                    <td><input name='mail' type='text' size='52'></input></td>
                </tr>
                <tr>
                    <td>Objet du message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                    <td><input name='objet' type='text' size='52'></input></td>
                </tr>
                <tr>
                    <td>Votre message </td>
                    <td><textarea name='message' cols='40' rows='10'></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right">
                        <input type='reset' value='Annuler'></input>
                        <input type='submit' value='Envoyer'></input>
                    </td>
                </tr>
            </table>
        </form>
    </blockquote>
    <br>

   <!-- _______________________________________________________________________________________________________________________________________________________ -->

<?php
    require_once "footer.php";
?>
  