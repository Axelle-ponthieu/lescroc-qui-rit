<?php include 'header.php'; ?>

<div class="container">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputfistname" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="inputfistname">
  </div>
  <div class="col-md-6">
    <label for="inputname" class="form-label">Nom</label>
    <input type="text" class="form-control" id="inputname">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputphonenumber" class="form-label">Numéro de téléphone</label>
    <input type="number" class="form-control" id="inputphonenumber">
  </div>
  <label for="prestaselector" class="form-label">Préstation</label>
  <div class="mb-3">
<select class="form-select" aria-label="Default select example" id="prestaselector">
  <option selected>Choisir la prestation</option>
  <option value="1">Escroquerie d'argent aux particuliers</option>
  <option value="2">Escroquerie d'argent aux entreprises</option>
  <option value="3">Escroquerie d'argent aux politiques</option>
  <option value="4">Escroquerie de réputation aux particuliers</option>
  <option value="5">Escroquerie de réputation aux entreprises</option>
  <option value="6">Escroquerie de réputation aux politiques</option>
  <option value="7">Escroquerie d'identité aux particuliers</option>
  <option value="8">Escroquerie d'identité aux entreprises</option>
  <option value="9">Escroquerie d'identité aux politiques</option>
  <option value="10">Préstation personnelle : Nouvelle identité</option>
  <option value="11">Préstation personnelle : Supprimer ses traces</option>
  <option value="12">Préstation personnelle : Fausse mort</option>
  <option value="13">Préstation personnelle : Package "Nouveau départ"</option>
</select>
</div>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Décrivez ici votre besoin et donner des détails sur votre cible et sa situation</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  <div class="mb-3">
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Je confirme vouloir être recontacté pour faire suite à ce devis
      </label>
    </div>
    <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Je confirme avoir pris connaissance et accepter les CGU
      </label>
    </div>
  </div>
  <div class="col-12
">
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </div>
</form>
</div>
 <!--

<div class="row">
  <div class="col">
  <label for="" class="form-label">Prénom</label>
    <input type="text" class="form-control" aria-label="First name">
  </div>
  <div class="col">
  <label for="" class="form-label">Nom</label>
    <input type="text" class="form-control" aria-label="Last name">
  </div>
</div>

<div class="row">
  <div class="col">
  <label for="" class="form-label">Numéro de téléphone</label>
    <input type="text" class="form-control" aria-label="Phone number">
  </div>
  <div class="col">
  <label for="" class="form-label">E-mail</label>
    <input type="email" class="form-control" aria-label="E-mail">
  </div>
</div>

<label for="" class="form-label">Préstation</label>
<select class="form-select" aria-label="Default select example">
  <option selected>Choisir la prestation</option>
  <option value="1">Escroquerie d'argent aux particuliers</option>
  <option value="2">Escroquerie d'argent aux entreprises</option>
  <option value="3">Escroquerie d'argent aux politiques</option>
  <option value="4">Escroquerie de réputation aux particuliers</option>
  <option value="5">Escroquerie de réputation aux entreprises</option>
  <option value="6">Escroquerie de réputation aux politiques</option>
  <option value="7">Escroquerie d'identité aux particuliers</option>
  <option value="8">Escroquerie d'identité aux entreprises</option>
  <option value="9">Escroquerie d'identité aux politiques</option>
  <option value="10">Préstation personnelle : Nouvelle identité</option>
  <option value="11">Préstation personnelle : Supprimer ses traces</option>
  <option value="12">Préstation personnelle : Fausse mort</option>
  <option value="13">Préstation personnelle : Package "Nouveau départ"</option>
</select>
-->



<?php include 'footer.php'; ?>