<!-- Composant du menu de navigation du site -->


        <h4 class="card-title text-center">Menu de navigation</h4>
        
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="index.php?uc=accueil">Accueil</a></li>
            <?php 
                if(isset($_SESSION["estConnecte"])) 
                {
                    if($_SESSION["estConnecte"])
                    {
                        echo '<li class="list-group-item"><a href="index.php?uc=saisie">Saisie</a></li>';
                        echo '<li class="list-group-item"><a href="index.php?uc=consultation">Consultation</a></li>';
                        echo '<li class="list-group-item"><a href="index.php?uc=adherent&action=afficherAdherent&typeC=adherent">Mes adhérents</a></li>';
                        echo '<li class="list-group-item"><a href="index.php?uc=connexion&action=deconnexion">Déconnexion</a></li>';
                        
                    }
                    else
                        echo '<li class="list-group-item"><a href="index.php?uc=connexion&action=afficheConnexion&typeC=form">Connexion</a></li>';     
                        
                }
                else
                    echo '<li class="list-group-item"><a href="index.php?uc=connexion&action=afficheConnexion&typeC=form">Connexion</a></li>';
            ?>  
        </ul>
