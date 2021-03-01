
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" style="font-family: MonsterFriend;" href="#">GAMERSTALE</a>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Qui sommes-nous ?</a></li>
  </ul>

  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i> Profil </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
        
          <?php if (!isset($_SESSION['user'])) {
            # code...
           ?>
          <a class="dropdown-item" href="signup.php">Inscription</a>
          <a class="dropdown-item" href="signin.php">Se connecter</a>
          <?php  }else{ ?>
          
          <a class="dropdown-item" href="profil.php"><?php echo $_SESSION['name'] ?></a>
          <a class="dropdown-item" href="deco.php">Se déconnecter</a>
          <?php
          }
          
          ?>
          
        </div>
      </li>
    </ul>
</div>
</nav>
<!-- <script src="mdb/js/bootstrap.js"></script> -->
  <script src="mdb/js/mdb.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>