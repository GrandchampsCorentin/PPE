<h1>Page de connexion</h1>

<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Menu déroulant
<span class="caret"></span>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
<li><a href="#" title="Lien 1">Lien 1</a></li>
<li><a href="#" title="Lien 2">Lien 2</a></li>
<li><a href="#" title="Lien 3">Lien 3</a></li>
<li role="separator" class="divider"></li>
<li><a href="#" title="Lien 4">Lien 4</a></li>
</ul>
</div> 

<div class="dropdown-menu">
  <form action="Controleurs/gestionConnexion.php" method="get">
    <div class="form-group">
      <label for="email">Adresse mail :</label>
      <input type="email" class="form-control" id="email" placeholder="email@exemple.com">
    </div>
    <div class="form-group">
      <label for="motPasse">Mot de passe : </label>
      <input type="password" class="form-control" id="motPasse" placeholder="Mot de passe">
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input">
        Remember me
      </label>
    </div>
    <button type="submit" id="connexion" class="btn btn-primary">Se connecter</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="index.php?uc=inscription" id="inscription">Vous êtes nouveau ici ? Enregistrez vous</a>
  <a class="dropdown-item" href="#">Mot de passe oublié ?</a>
</div>