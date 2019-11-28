
<?php 
    include_once 'db.php';
    $consulta1 = "SELECT * FROM chat ORDER BY id DESC";
    $ejecutar1 = $conexion->query($consulta1);   
     while($fila = $ejecutar1->fetch_array()){
  ?>
                    <div id="datos-chat">
                    <span style="color: #ff0000"><?php echo $fila['nombre']; ?>: </span>
                    <span><?php echo $fila['mensaje']; ?></span>
                    <span style="float: right;"><?php echo formatearfecha( $fila['fecha']); ?></span>
    
                   </div>
<?php }?>

