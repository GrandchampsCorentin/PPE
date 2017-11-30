
<h2 class="card-header text-center">Nouvel Adherent</h2>

<form class="mt-2 mb-0" action="" method="post">
    <div class="form-row">
        <div class="col">
            <label  for="nomDemandeur">Nom : </label>
            <input type="text" required="" placeholder="Nom" class="form-control" name="nomDemandeur" id="nomDemandeur" 
            value="<?php if(isset($_SESSION['inscription']))echo $_SESSION['inscription'][1];else  echo '';?>">
        </div>
        <div class="col">
            <label  for="prenomDemandeur">Prénom : </label>
            <input type="text" required="" placeholder="Prénom"  class="form-control" name="prenomDemandeur" id="prenomDemandeur" 
            value="<?php if(isset($_SESSION['inscription']))echo $_SESSION['inscription'][2];else  echo '';?>">
        </div>
    </div>
    <div class="form-group">
        <label  for="adresseDemandeur">Adresse : </label>
        <input type="text" required="" placeholder="Adresse"  class="form-control" name="adresseDemandeur" id="adresseDemandeur"
        value="<?php if(isset($_SESSION['inscription']))echo $_SESSION['inscription'][3];else  echo '';?>">
    </div>
    <div class="form-row">
        <div class="col">  
            <label  for="cpDemandeur">Code Postal : </label>
            <input type="text" required="" placeholder="Code Postal"  class="form-control" name="cpDemandeur" id="cpDemandeur" 
            value="<?php if(isset($_SESSION['inscription']))echo $_SESSION['inscription'][4];else  echo '';?>">
        </div>
        <div class="col">    
            <label  for="villeDemandeur">Ville : </label>
            <input type="text" required="" placeholder="Ville"  class="form-control" name="villeDemandeur" id="villeDemandeur" 
            value="<?php if(isset($_SESSION['inscription']))echo $_SESSION['inscription'][5];else  echo '';?>">
        </div>
    </div>
    <div class="form-group">    
        <label  for="emailDemandeur">Email : </label>
        <input type="text" required="" placeholder="Adresse mail"  class="form-control" name="emailDemandeur" id="emailDemandeur" 
        value="<?php if(isset($_SESSION['inscription']))echo $_SESSION['inscription'][0];else  echo '';?>">
    </div>
    <div class="form-group">    
        <label  for="motDePasseDemandeur">Mot de passe : </label>
        <input type="text" required="" placeholder="Au moins 8 caractères"  class="form-control" name="motDePasseDemandeur" id="motDePasseDemandeur" value="">
    </div>
    <div class="form-group">   
        <label  for="motDePasseDemandeur2">Mot de passe : </label>
        <input type="text" required="" placeholder="Entrez à nouveau votre mot de passe"  class="form-control" name="motDePasseDemandeur2" id="motDePasseDemandeur2" value="">
    </div>

        <input type="submit" value="S'inscrire" id="bt-inscription" class="btn btn-lg btn-primary btn-block">
    </div>
</form>
