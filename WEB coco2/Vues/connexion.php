
<? $_SESSION["estConnecte"] = false;?>
<h2 class="card-header text-center py-2">Connexion à l'espace personnel</h2>
<form class="form-signin" action="index.php?uc=connexion&action=connexion" method="post">
    
    <label for="mail" class="sr-only">Adresse mail : </label>
    <input type="email" value="" id="mail" name="mail" class="form-control my-3" placeholder="Adresse email" required="" autofocus="">
    <label for="motPasse" class="sr-only">Mot de passe :</label>
    <input type="password" value="" id="motPasse" name="motPasse" class="form-control my-3" placeholder="Mot de passe" required="">
    <div class="checkbox">
        <label><input type="checkbox" value="remember-me"> Se souvenir de moi</label>
    </div>
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Se connecter">
</form>

<a href="index.php?uc=inscription&action=afficherInscription&typeC=form">Je n'ai pas de compte, je souhaite m'inscrire.</a>
