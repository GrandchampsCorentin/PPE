
<div class="row">
    <?php
        //Si il n'existe aucun url portant la variable uc ainsi que sa valeur
        //Alors on en instancie une nouvelle qui redirige sur l'accueil
        if(!isset($_REQUEST['uc']))
            $uc = 'accueil';
        else
            $uc = $_REQUEST['uc'];

        //Station d'aiguillage du site web
        switch($uc)
        {
        case 'connexion':
            {include("Controleurs/gestionConnexion.php");break;}
        case 'inscription' :
            {include("vues/inscription.php");break;}
        case 'accueil' :
            {include("vues/accueil.php");break;}
        case 'saisie':
            {include("vues/saisieFrais.php");break;}    
        case 'gestionSaisie':
            {include("Controleurs/gestionSaisie.php"); break;}
        } 
    ?>
</div>