

  <?php if (isset($_SESSION['supression_piece_non_vide'])): ?>
    <h3 id="erreurco" class="basic-grey">La pièce séléctionnée n'est pas vide</h3><\br>
  <?php
  /*Détruit une variable*/
    unset($_SESSION['supression_piece_non_vide']);
    endif;
  ?>
  <div class="menu-vertical">
      <div class="mv-item">
        <a href="index.php?page=ajout_piece">

        <p> Ajouter une pièce </p>
      </a>
      </div>
      <div class="mv-item">
        <a href="index.php?page=modif_piece"> 

        <p> Modifier une pièce </p>
        </a>
      </div>
      <div class="mv-item">
        <a href="index.php?page=supprime_piece">

        <p> Supprimer une pièce </p>
        </a>
      </div>
  </div>


