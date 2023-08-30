<?php
$id = mysql_real_escape_string($_GET['id']);// en esta linea se recibe el id del usuario
?>

                <center>
                <?php
                // en esta linea se hace la consulta de los albumes del usuario
                $fotosa = mysql_query("SELECT * FROM albumes WHERE usuario = '$id' ORDER BY id_alb asc");
                while($fot=mysql_fetch_array($fotosa))
                {
                $fotalb = mysql_query("SELECT ruta FROM fotos WHERE album = '$fot[id_alb]' ORDER BY id_fot DESC");
                $fotal = mysql_fetch_array($fotalb);
                ?>
                  <a href="?id=<?php echo $id;?>&album=<?php echo $fot[id_alb]; ?>&perfil=albumes"><img src="publicaciones/<?php echo $fotal['ruta'];?>" width="19%"> </a>
                  <br>
                  <?php echo $fot['nombre']; ?>
                <?php
                }
                ?>
                </center>