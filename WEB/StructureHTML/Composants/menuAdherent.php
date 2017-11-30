<div class="card offset-1 col-2 bg-light pt-2 pb-3 decalageVerticalArticles mb-auto">
    <h5 class="text-center">Mes adhérents</h5>
    <select  class="custom-select">
            <option value='01'><?php if(isset($tabIdAdherents[0])) echo $tabIdAdherents[0];?></option>
            <option value='02'><?php if(isset($tabIdAdherents[1])) echo $tabIdAdherents[1]?></option>
    </select>
</div>