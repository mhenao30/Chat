<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php 
include_once 'db.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ChatM</title>
        <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript">  
        function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status == 200){
                    document.getElementById('chat').innerHTML = req.responseText;  
                }
            }
            req.open('GET', 'chat.php', true);
            req.send();
        }
        setInterval(function(){ajax();}, 1000);
        </script>
    </head>
    <body onload="ajax()">
        <div id="contenedor">
            <div id="caja-chat">
                <div id="chat">
                </div>   
            </div>
            <form method="POST" action="index.php">
                <input type="text" name="nombre" placeholder="Nombre">
                <textarea name="mensaje" placeholder="Mensaje"></textarea>
                <input type="submit" name="enviar" value="Enviar">
            </form>
            <?php 
            if(isset($_POST['enviar'])){
               $nombre = $_POST['nombre'];
               $mensaje = $_POST['mensaje'];
               $consulta = "INSERT INTO chat(nombre, mensaje) VALUES ('$nombre', '$mensaje')";
               $ejecutar = $conexion->query($consulta);
               if($ejecutar){
                   echo "<embed loop='false' src='sonido.mp3' hidden='true' autoplay='true'";
                   
               }
            }
            ?>
        </div>
    </body>
</html>
