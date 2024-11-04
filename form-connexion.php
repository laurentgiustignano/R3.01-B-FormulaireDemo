<?php
$title = "Formulaire de Connexion";
require_once 'header.php';

if(isset($_GET['error'])) {
  echo "<div class='alert alert-danger'>Email non conforme</div>";
}

?>
  <div class="container">
    <h1>Exemple de Formulaire de connexion</h1>

    <form class="row g-3" action="connexion.php" method="post">
      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Se connecter</button>
    </form>
  </div>

<?php
require_once 'footer.php';