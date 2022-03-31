<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <?php
          if(empty($_SESSION["id"])){
            echo '<a class="nav-link" href="index.php?page=login&action=login">Bejelentkezés</a>';
          }else{
            echo '<a class="nav-link" href="index.php?page=login&action=logout">Kilépés</a>';
          }
        ?>
      </li>
    </ul>
  </div>
</nav>