<div class="card offset-3 col-6 bg-light contenu2 pt-2 pb-3">
<? $_SESSION["estConnecte"] = false;?>
  <div class="container-fluid">
    <div class="row">
    <div class="col" >
      <form class="form-signin" action="index.php?uc=connexion&action=connexion" method="post">
        <h2 class="card-header text-center py-2">Connexion à l'espace personnel</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control my-3" placeholder="Adresse email" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control my-3" placeholder="Mot de passe" required="">
        <div class="checkbox">
          <label><input type="checkbox" value="remember-me"> Se souvenir de moi</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
      </form>
        <a href="index.php?uc=inscription&action=afficherInscription">Je n'ai pas de compte, je souhaite m'inscrire.</a>
      </div>
    </div>
  </div>
</div>