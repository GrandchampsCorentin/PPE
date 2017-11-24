<?php
        //Si il n'existe aucun url portant la variable uc ainsi que sa valeur
        //Alors on en instancie une nouvelle qui redirige sur l'accueil
        if(!isset($_REQUEST['uc'])) $uc = 'accueil';
        else $uc = $_REQUEST['uc'];

        if(!isset($_REQUEST['typeC'])) $typeContenu = null;
        else $typeContenu = $_REQUEST['typeC'];
?>

<div class="row bg-dark">
        
<?php
        switch($typeContenu)
        {
            default :
            {
                echo '<div class="card  offset-1 col-10 bg-light pt-2 pb-3 decalageVerticalArticles">';
                break;
            }
            case 'form' :
            {
                echo '<div class="card offset-3 col-6 bg-light pt-2 pb-3 decalageVerticalArticles">';
                break;
            }
        }

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
</div>