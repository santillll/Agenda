<?php
session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

// MODIFICAÇÕES NO BANCO
if (!empty($data)) {

  // Criar contato
  if ($data["type"] === "create") {
    $Race = $data["Race"];
    $Ownersphone = $data["Ownersphone"];
    $Observations = $data["Observations"];

    $query = "INSERT INTO clinica (Race, Ownersphone, Observations) 
              VALUES (:Race, :Ownersphone, :Observations)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":Race", $Race);
    $stmt->bindParam(":Ownersphone", $Ownersphone);
    $stmt->bindParam(":Observations", $Observations);

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Contato criado com sucesso!";
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "Erro: $error";
    }

  } elseif ($data["type"] === "edit") {
    $Callnumber = $data["Callnumber"];
    $Race = $data["Race"];
    $Ownersphone = $data["Ownersphone"];
    $Observations = $data["Observations"];

    $query = "UPDATE clinica 
              SET Race = :Race, Ownersphone = :Ownersphone, Observations = :Observations
              WHERE Callnumber = :Callnumber";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":Race", $Race);
    $stmt->bindParam(":Ownersphone", $Ownersphone);
    $stmt->bindParam(":Observations", $Observations);
    $stmt->bindParam(":Callnumber", $Callnumber);
   

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Contato atualizado com sucesso!";
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "Erro: $error";
    }

  } elseif ($data["type"] === "delete") {

    $Callnumber = $data["Callnumber"];

    $query = "DELETE FROM clinica WHERE Callnumber = :Callnumber";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":Callnumber", $Callnumber);

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Contato removido com sucesso!";
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "Erro: $error";
    }
  }

  // Redirect HOME
  header("Location:" . $BASE_URL . "../index.php");
  exit;

} else {
  // SELEÇÃO DE DADOS (quando não há POST)

  $Callnumber = null;

  if (!empty($_GET) && isset($_GET["Callnumber"])) {
    $Callnumber = $_GET["Callnumber"];
  }

  // Retorna o dado de um contato específico
  if (!empty($Callnumber)) {
    $query = "SELECT * FROM clinica WHERE Callnumber = :Callnumber";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":Callnumber", $Callnumber);
    $stmt->execute();
    $contact = $stmt->fetch();
  } else {
    // Retorna todos os contatos
    $contacts = [];
    $query = "SELECT * FROM clinica";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $contacts = $stmt->fetchAll();
  }
}

// FECHAR CONEXÃO
$conn = null;
