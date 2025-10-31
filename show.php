<?php
  include_once("templates/header.php");
?>
<div class="container" id="view-contact-container"> 
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title"><?= $contact["Race"] ?></h1>

  <p class="bold">Telefone do dono:</p>
  <textarea type="text" class="form-control" id="phone" name="Ownersphone" placeholder="Informe o telefone" rows="3"><?= $contact['Ownersphone'] ?></textarea>

  <p class="bold">Número de chamada:</p>
  <p class="form-control"><?= $contact["Callnumber"] ?></p>

  <p class="bold">Observações:</p>
  <textarea type="text" class="form-control" id="observations" name="Observations" placeholder="Insira as observações" rows="3"><?= $contact['Observations'] ?></textarea>
   
  <button type="submit" class="btn btn-primary">Atualizar</button>
</div>
<?php
  include_once("templates/footer.php");
?>

