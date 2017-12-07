
<h1>Saisie des frais </h1>

<form action="index.php?uc=gestionSaisie&action=saisie" method="post">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Motif</th>
        <th>Trajet</th>
		<th>Km</th>
		<th>Peage(s)</th>
		<th>Repas</th>
		<th>Hebergement</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" class="form-control" name="Date[]" id="Date" value=""></td>
        <td><input type="text" class="form-control"name="Motif[]" id="Motif" value=""></td>
        <td><input type="text" class="form-control"name="Trajet[]" id="Trajet" value=""></td>
		<td><input type="text" class="form-control"name="Km[]" id="Km" value=""></td>
		<td><input type="text" class="form-control"name="Peage[]" id="Peage" value=""></td>
		<td><input type="text" class="form-control"name="Repas[]" id="Repas" value=""></td>
		<td><input type="text" class="form-control"name="Hebergement[]" id="Hebergement" value=""></td>
      </tr>
    </tbody>
  </table>
  <div class="mx-auto" style="width: 300px;">
  <button class="btn btn-primary "type="button" id="add">Ajouter un frais</button>
  <input class="btn btn-primary "type="submit" name="valider" value = "valider">
 </div>
 <script type="text/javascript">
document.querySelector('#add').addEventListener('click', function(event) {
   
var first = document.querySelector('table tbody tr:first-child');
  first.parentNode.appendChild(first.cloneNode(true));
   
});
</script>
  </form>
 
