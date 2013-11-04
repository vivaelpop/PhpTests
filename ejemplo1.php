<html>
<head>
    <title>Ejemplo de uso simple en envío y recepción de parámetros con PHP</title>
</head>
<body>
<?php
// Si existe la variable $_POST['muestra'], entonces muestra la comida favorita
if (isset($_POST['muestra']))
    {
          echo 'Hola, '.$_POST['nombre'].', tu comida favorita es: '. $_POST['comida'].'';
    } else {
// Si no, muestra un formulario solicitando la comida favorita
?>