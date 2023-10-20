<?php
  include_once("templates/header.php");
?>
  <h1>Contatos</h1>
  <br>
    <div class="telefone">
      <img src="img/telefone.webp">
      <h5>Telefone: </h5>
      <p>+55 11 94616-4393</p>
    </div>
    <div class="email">
      <img src="img/email.png">
      <h5>Email: </h5>
      <p>cinemania@gmail.com</p>
    </div>

  <style>
    body{
      width: 100%;
    }
    h1{
      text-align: center;
      margin-top: 50px;
      font-size:xx-large;
      margin-bottom: 70px;
    }
    img{
      width: 150px;
    } 
    .telefone{
      display: inline-block;
      margin-left: 25%;
      /* margin-right: 50%; */
      text-align: center;
      font-size:large ;
    }
    .email{
      display: inline-block;
      position: relative;
      float: right;
      margin-right: 25%;
      text-align: center;
      font-size:large ;
    }
<?php
  include_once("templates/footer.php")
?>