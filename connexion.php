<?php
$title = "Connexion";
require_once 'header.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $password = $_POST['password'];

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: form-connexion.php');
  }
  echo "<div class='alert alert-success'>Connexion réussie</div>";
  ?>
  <div class="container">
    <h1>Exemple de Forumulaire de connexion</h1>

  <?php
  echo "<p class='lead'>Email : " . htmlspecialchars($email) . "</p>";
  echo "<p><a class='link' href='form-connexion.php'>Retour au formulaire</a></p>";
}

require_once 'footer.php';