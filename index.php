<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php if(isset($printMsg) && $printMsg != '0'): ?>
      <p Callnumber="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 Callnumber="main-title">Clínica de Pets</h1>
    <?php if(count($contacts) > 0): ?>
      <table class="table" Callnumber="clinica-table">
        <thead style="background-color: purple; color: white;">
          <tr>
            <th scope="col">Número de chamada</th>
            <th scope="col">Raça</th>
            <th scope="col">Telefone do dono</th>
            <th scope="col">Observações</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($contacts as $contact): ?>
            <tr>
              <!-- <td class="col-id"><?= $contact["id"] ?></td> -->
              <td class="col-id"><?= $contact["Callnumber"] ?></td>
              <td><?= $contact["Race"] ?></td>
              <td><?= $contact["Ownersphone"] ?></td>
              <td><?= $contact["Observations"] ?></td>
              <td class="actions">
                <a href="<?= $BASE_URL ?>show.php?Callnumber=<?= $contact["Callnumber"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?= $BASE_URL ?>edit.php?Callnumber=<?= $contact["Callnumber"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>config/process.php" method="POST"> 
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="Callnumber" value="<?= $contact["Callnumber"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>  
      <p Callnumber="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
  </div>
<?php
  include_once("templates/footer.php");
?>

