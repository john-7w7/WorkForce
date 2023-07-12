<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/color/color.css">
    <link rel="stylesheet" type="text/css" href="assets/testimonial/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/testimonial/css/elastislide.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="shortcut icon" href="images/12.png" type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel='stylesheet' type='text/css'
        href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>


    <link rel="stylesheet" type="text/css" href="assets/revolution_slider/css/revslider.css" media="screen" />
    <style>
        * {
            padding: 0px;
            margin: 0px;
            font-family: Centaury Gothic;
        }

        body {
            background-color: #ededed;
        }

        form {
            width: 700px;
            margin: auto;
            background-color: #08c2f3;
            margin-top: 30px;
        }

        input {
            margin: 15px;
            padding: 10px;
            width: 640px;
            font-size: 18px;
            border: none;
            margin-bottom: 5px;
        }

        input[type="submit"] {
            margin-bottom: 15px;
            margin-top: 5px;
        }

        textarea {
            font-size: 18px;
            margin: 15px;
            padding: 10px;
            min-width: 640px;
            max-width: 640px;
            min-height: 100px;
            max-height: 200px;
            border: none;
            margin-bottom: 5px;
        }

        h4 {
            margin-top: 70px;
        }

        a {
            font-size: 20px;
            color: red;
        }
    </style>
</head>

<body>
    <h4>Alguna queja o sugerencia</h4>
    <form method="post">
        <input type="text" placeholder="Nombre" name="name" required>
        <input type="email" placeholder="Correo" name="email" required>
        <input type="text" placeholder="Asunto" required>
        <textarea placeholder="Mensaje" name="msg"></textarea>
        <input type="submit" name="enviar">
    </form><br>
    <a href="contact.php">
        ← Mandar a la opcion de contacto</a>
    <?php
    include("correo.php");
    ?>
</body>

</html>