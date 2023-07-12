<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO tbluser (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Se creo la cuenta correctamente';
    } else {
      $message = 'Lo sentimos, no se pudo crear la cuenta';
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
 
  <title>Work-Force | Registrate</title>
 

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="shortcut icon" href="images/12.png" type="image/x-icon">

  <style>
    input[type="email"], input[type="password"]{
  outline: none;
  padding: 20px;
  display: block;
  width: 300px;
  border-radius: 3px;
  border: 1px solid #eee;
  margin: 20px auto;
}

input[type="submit"] {
  padding: 10px;
  color: #fff;
  background: #0098cb;
  width: 320px;
  margin: 20px auto;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #00b8eb;
}

/* Header */
header {
  border-bottom: 2px solid #eee;
  padding: 20px 0;
  margin-bottom: 10px;
  width: 100%;
  text-align: center;
}
header a {
  text-decoration: none;
  color: #333;
}
  </style>
</head>
<body class="hold-transition login-page">
<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>Work-Force | Registro</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrate para crear tu cuenta.</p>

      <form action="" method="post" id="login">
      <input name="email" type="email" placeholder="Ingresa tu correo" required>
      <input name="password" type="password" placeholder="Ingresa una contraseña" required>
      <h4>Ingresa el captcha</h4>
      <div id="captcha" class="captcha"></div>

            <input id="captcha-input" class="form-control captcha-input" type="text" placeholder="Ingrese el CAPTCHA" required><br>
      <button id="refresh-button" class="btn btn-primary">Refrescar</button>

    <button id="submit-button" class="btn btn-success">Enviar</button>

</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script>

function generateCaptcha() {

  var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

  var captcha = "";

  for (var i = 0; i < 6; i++) {

    captcha += chars.charAt(Math.floor(Math.random() * chars.length));

  }

  document.getElementById("captcha").textContent = captcha;

}




$(document).ready(function() {

  generateCaptcha();




  $("#refresh-button").click(function() {

    generateCaptcha();

    $("#captcha-input").val("");

  });




  $("#submit-button").click(function() {

    var userCaptcha = $("#captcha-input").val();

    var generatedCaptcha = $("#captcha").text();




    if (userCaptcha === generatedCaptcha) {

      alert("¡CAPTCHA válido!");

    } else {

      alert("CAPTCHA incorrecto. Inténtalo de nuevo.");

    }

  });

});

</script><br>
    <input type="submit" value="Registrar">
    </form>
        <center><p><a href="user.php">Iniciar sesión</a></p></center>
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>