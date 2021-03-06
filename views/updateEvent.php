<?php

require_once "components/viewsControllers/event_controller.php";
require_once "blocks/eventModal.php";

?>

<main id='main' class="container my-5">

  <h2 class="text-center">Mettre à jour un evenement:</h2>
  <form
    class="row d-flex justify-content-center needs-validation"
    name="addEventForm"
    enctype="multipart/form-data"
    action="components/controller.php"
    method="POST"
    novalidate
  >
  <div class="col-12 d-flex justify-content-center">
      <img id="formLogo" class="col-12 mb-4" src="assets/image.svg" alt="image.svg" width="72" height="57" />
    </div>

    <input type="hidden" name="img" value="<?=$img ?>">
    <input type="file" name="fileToUpload" id="fileUpload" class="form-control-file" />


    <div class="col-md-8 py-2 text-center">
      <label class="form-label">Nom de l'evenment:</label>
      <input type="text" name="eventName" class="form-control" value="<?=$name ?>" required />
      <input type="hidden" name="id" value="<?=$event['id'] ?>">
    </div>
    <div class="col-md-8">
    <label class="form-label">Date:</label>
      <input type="date" name="date" class="form-control" value="<?=$date ?>" required />
    </div>
    <div class="col-md-8 py-2 text-center">
      <label class="form-label">Heure :</label>
      <input type="time" name="time" class="form-control" value="<?=$time ?>" required />
    </div>

    <div class="col-md-8 py-2 text-center">
      <label class="form-label">Nature de l'evenment:</label><br />
      <select name="category" class="form-select col-12" selected="<?=$event['category'] ?>" required>
        <option selected>Votre choix...</option>
        <option value="SPORT">SPORT</option>
        <option value="LOISIR">LOISIR</option>
        <option value="CULTURE">CULTURE</option>
      </select>
    </div>
    <div class="col-md-8">
      <label for="">Description:</label>
      <textarea name="description" class="form-control" rows="6"><?=$event['description'] ?></textarea>
    </div>
    <div class="col-md-8 py-2 text-center">
      <label class="form-label">Ville:</label>
      <input type="text" name="city" class="form-control" value="<?=$event['city'] ?>" required />
    </div>
    <div class="col-md-8 py-2 text-center">
      <label class="form-label">Lieu Exacte:</label>
      <input type="text" name="place" class="form-control" value="<?=$event['place'] ?>" required />
    </div>
    <div class="col-md-8 text-center">
      <button class="btn btn-primary btn-lg" type="submit" name="updateEvent">Mettre à Jour</button>
      <?=$activateButton ?>
    </div>

  </form>
  <div class="text-center py-5">
  <button class="col-2 btn btn-danger btn-lg" data-bs-toggle='modal' data-bs-target="#eventDeleteModal<?=$eventID?>">Suprimer</button>
  </div>

</main>

<script>
document.getElementById('formLogo').addEventListener('click', () => {
  document.getElementById('fileUpload').click()
})
</script>
