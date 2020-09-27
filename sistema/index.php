<?php
  session_start();
  
  require_once 'header.php';

  echo "<div class='parrafo'>Bienvenido a las ventas de hamburguesas,";
  if ($loggedin) echo "$user, Estas conectado";
  else           echo ' por favor regístrese o inicie sesión';
  echo <<<_END
      </div><br>
    </div>
    <center><img src="images/hamburguesa.jpg" width = 250 height="200" /></center>
    <div data-role="footer">
       <h4>informacion acerca del creador de <i><a href= 'http://localhost/cv_mariana/'
       target='_blank'>VENTA HAMBURGUESAS</a></i></h4>
    </div>

  </body>
</html>
_END;
?>
