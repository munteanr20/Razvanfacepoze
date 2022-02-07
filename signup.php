<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Razvan face poze</title>
    <link rel="icon" href="img/emoji/Ciclon.png" type="image/icon type">
    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Owl CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
    <!-- Owl Default CSS-->
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>
<!-- Navigation -->
<body>
  <div class="hero">
    <header >
        <nav class="navbar  navbar-custom navbar-expand-lg ">
            <div class="container-fluid py-3">
                <a href="index.php" class="navbar-brand mx-auto">
                  <img src="img/emoji/Ciclon.png" alt="logo" title="logo" />Razvan
                    face poze </a>
            </div>
    </header>

    <div class="form-box" style="height: 650px">
      <div class="button-box">
        <div id="b1tn"></div>
        <button type="button" class="toggle-btn" onclick = "login()" >Logare</button>
        <button type="button" class="toggle-btn" onclick = "register()">Inregistrare</button>
      </div>
      <form id="login" action ="includes/login.inc.php" method="post" class="input-group">
      <?php
        if ( isset($_GET["error"])){
          if ($_GET["error"] == "emptyinput"){
            echo "<p> Completeaza toate campurile</p>";
          }
          else if($_GET["error"] == "wronglogin"){
            echo "<p>Username sau parola gresita!</p>";
          }
        }
      ?>
        <input type="text" class="input-field" name="uid" placeholder="Username/Email">
        <input type="password" class="input-field" name="pwd" placeholder="Introdu parola">
        <div>
          <input type="checkbox" class="check-box" id="pass" name="pass">
          <label for="pass" class="pass">Tine-ma minte</label>
        </div>
        <button type="submit" class="submit-btn" name="submit">Logare</button>
      </form>
      <form id="register" class="input-group" action="includes/signup.inc.php" method = "post">
      <?php
        if ( isset($_GET["error"])){
          if ($_GET["error"] == "emptyinput"){
            echo "<p> Completeaza toate campurile</p>";
          }
          else if($_GET["error"] == "invaliduid"){
            echo "<p>Alege un username mai ok</p>";
          }
          else if($_GET["error"] == "invalidemail"){
            echo "<p>Alege un email mai ok</p>";
          }
          else if($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Parolele nu sunt asemanatoare</p>";
          }
          else if($_GET["error"] == "stmtfailed"){
            echo "<p>Ceva nu a functionat! Incearca mai tarziu!</p>";
          }
          else if($_GET["error"] == "usernametaken"){
            echo "<p>Username sau email deja folosit, incearca altul!</p>";
          }
          else if($_GET["error"] == "none"){
            echo "<p>Inregistrarea a avut loc cu succes</p>";
          }
        }
      ?>

        <input type="text" class="input-field" name="name"  placeholder = "Nume">
        <input type="email" class="input-field" name="email" placeholder="Email Id">
        <input type="text" class="input-field" name="uid" placeholder="User Id">
        <input type="password" class="input-field" name="pwd" placeholder="Introdu parola">
        <input type="password" class="input-field" name="pwdrepeat" placeholder="Reintrodu parola">
        <div id="check">
          <input type="checkbox" class="check-box" id="pass" name="pass">
          <label for="pass" class="pass">Sunt de acord cu termenii si conditiile</label>
        </div>
        <button type="submit" name="submit" class="submit-btn">Register</button>
      </form>
    </div>
    <script>
      var x = document.getElementById("login");
      var y = document.getElementById("register");
      var z = document.getElementById("b1tn");

      function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "160px";
      }
      function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
      }
    </script>

    <div class="socket text-light py-3">
      <div class="row">
          <div class="col align-self-start col-sm-6 my-sm-auto">
              <p class="text-left p-2  my-auto">
                  &copy; <a href="https://www.facebook.com/razvan.muntean.710" target="_blank">Muntean Razvan</a>
              </p>
          </div>
          <div class="col align-self-end col-sm-6 my-sm-auto">
                  <p class="text-center text-md-right pr-2 my-auto ">
                      <a href="https://contar.io/munteanr20" target="_blank">
                          Pentru mai multe optiuni de contact &nbsp; <img class="contact" src="img/emoji/contar.png">
                      </a>
                  </p>
          </div>
      </div>
    </div>
  </div>
</body>