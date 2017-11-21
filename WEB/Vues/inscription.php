<div class="card offset-3 col-6 bg-light contenu2 pt-2">
<div class="row">
    <div class="col">
    
        <h2 class="card-header text-center">Inscription demandeur</h2>
   
        </br>
        <form action="Controleurs/gestionInscription.php" method="get">
            <div class="form-row">
                <div class="col">
                    <label for="nomDemandeur">Nom : </label>
                    <input type="text" placeholder="Nom" class="form-control" name="nomDemandeur" id="nomDemandeur" value="">
                </div>
                <div class="col">
                    <label for="prenomDemandeur">Prénom : </label>
                    <input type="text" placeholder="Prénom"  class="form-control" name="prenomDemandeur" id="prenomDemandeur" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="adresseDemandeur">Adresse : </label>
                <input type="text" placeholder="Adresse"  class="form-control" name="adresseDemandeur" id="adresseDemandeur">
            </div>
            <div class="form-row">
                <div class="col">  
                    <label for="cpDemandeur">Code Postal : </label>
                    <input type="text" placeholder="Code Postal"  class="form-control" name="" id="" value="">
                </div>
                <div class="col">    
                    <label for="villeDemandeur">Ville : </label>
                    <input type="text" placeholder="Ville"  class="form-control" name="" id="" value="">
                </div>
            </div>
            <div class="form-group">    
                <label for="emailDemandeur">Email : </label>
                <input type="text" placeholder="Adresse mail"  class="form-control" name="" id="" value="">
            </div>
            <div class="form-group">    
                <label for="motDePasseDemandeur">Mot de passe : </label>
                <input type="text" placeholder="Au moins 8 caractères"  class="form-control" name="" id="" value="">
            </div>
            <div class="form-group">   
                <label for="motDePasseDemandeur2">Mot de passe : </label>
                <input type="text" placeholder="Entrez à nouveau votre mot de passe"  class="form-control" name="" id="" value="">
            </div>

                <input type="submit" value="S'inscrire" id="bt-inscription" class="btn btn-lg btn-primary btn-block">
            </div>
        </form>
    </div>
</div>
</div>