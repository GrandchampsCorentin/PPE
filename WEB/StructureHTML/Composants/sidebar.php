<!-- Composant du menu de navigation du site -->

<span class="col-3">
    <div class="card mt-2 px-3 pt-2">
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
                        echo '<li class="list-group-item"><a href="index.php?uc=connexion&action=deconnexion">Déconnexion</a></li>';
                        /*else
                        {
                            echo '<select name="adherents" id="adherents">';
                            foreach($lesProfils as $profil)
                            {
                                echo '<option value="<?=$profil?>">'$profil'</option>';
                            }
                            echo '</select>';
                        }*/
                    }
                    else
                        echo '<li class="list-group-item"><a href="index.php?uc=connexion&action=afficheConnexion">Connexion</a></li>';     
                        
                }
                else
                    echo '<li class="list-group-item"><a href="index.php?uc=connexion&action=afficheConnexion">Connexion</a></li>';
            ?>  
        </ul>
    </div>
</span>