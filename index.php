<?php
include_once 'homelogin.php';
?>
<selection class="main-container">
  <div class="main-wrapper">
    <h2>HOME</H2>
      <?PHP
      if(isset($_SESSION['Uname']))
      {
        echo "you are loged in!";
      }
      ?>
    </div>
  </selection>
  <?
  include_once 'fotter.php'
?>
