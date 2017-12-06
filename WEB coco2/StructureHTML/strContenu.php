<?php
        //Si il n'existe aucun url portant la variable uc ainsi que sa valeur
        //Alors on en instancie une nouvelle qui redirige sur l'accueil
        if(!isset($_REQUEST['uc'])) $uc = 'accueil';
        else $uc = $_REQUEST['uc'];

        if(!isset($_REQUEST['typeC'])) $typeContenu = null;
        else $typeContenu = $_REQUEST['typeC'];

        /* Cr�ation d'une instance d'acc�s � la base de donn�es */
        $pdo = PdoFredi::getPdoFredi();	 
?>

<div class="row bg-dark">
        
<?php
        if(isset($_SESSION['message']))
        {
            $message = $_SESSION['message'];
            echo '<div class="offset-4 col-4 alert alert-warning boiteMessage" id="boiteMessage">'.$message.'</div>';
            echo '<div class="w-100"></div>';
            $_SESSION['message'] = null;
        }

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
            case 'adherent' :
            {
                break;
            }
        }

        //Station d'aiguillage du site web
        switch($uc)
        {
        case 'connexion':
            {include("Controleurs/gestionConnexion.php");break;}
        case 'inscription' :
            {include("Controleurs/gestionInscription.php");break;}
        case 'accueil' :
            {include("vues/accueil.php");break;}
        case 'adherent' :
            {include("Controleurs/gestionAdherent.php");break;}
        case 'saisie':
            {include("vues/saisieFrais.php");break;}    
        case 'gestionSaisie':
            {include("Controleurs/gestionSaisie.php"); break;}
        } 
    ?>
    </div>
</div>