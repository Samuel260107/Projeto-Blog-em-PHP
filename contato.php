<?php
  include_once("templates/header.php");
?>
  <h1>Contatos</h1>
  <div class="telefone">
    <img src="img/telefone.webp">
    <h4>Telefone:</h4>
    <p>+55 1194616-4936</p>
  </div>
  <div class="email">
    <img src="img/email.png">
    <h4>Email:</h4>
    <p>cinemania@gmail.com</p>
  </div>

  <style>
    h1{
      position: relative;
      text-align: center;
      top: 20px;
    }
    img{
      width: 100px;
    }
    .telefone{
      position: relative;
      margin-left: 25%;
      top: 75px;      
    }
    .email{
      position: relative;
      float: right;
      bottom: 65px;
      margin-right: 25%;
      
    }
  </style>
  <?php
  include_once("templates/footer.php")
?>
