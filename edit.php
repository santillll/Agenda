<?php
  include_once("templates/header.php");
?>
<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title">Atualizar contato</h1>
  <form id="edit-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <!-- tipo de ação -->
    <input type="hidden" name="type" value="edit">
    <!-- identificador do pet -->
    <input type="hidden" name="Callnumber" value="<?= $contact['Callnumber'] ?>">

    <div class="form-group">
      <label for="Race">Nome da Raça:</label>
      <input type="text" class="form-control" id="Race" name="Race" placeholder="Digite o nome" value="<?= $contact['Race'] ?>" required>
    </div>

    <div class="form-group">
      <label for="Ownersphone">Telefone do Dono:</label>
      <input type="text" class="form-control" id="Ownersphone" name="Ownersphone" placeholder="Digite o telefone" value="<?= $contact['Ownersphone'] ?>" required>
    </div>

    <div class="form-group">
      <label for="Observations">Observações do Cachorro:</label>
      <textarea class="form-control" id="Observations" name="Observations" placeholder="Insira as observações" rows="3"><?= $contact['Observations'] ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
  </form>
</div>
<?php
  include_once("templates/footer.php");
?>