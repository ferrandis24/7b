<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="listadeusuarios.php" method="post">

        <label for="nombre">nombre</label>
        <br>
        <input type="text" name="nombre" id="nombre" value="">
        <div id="nombOcult" style="display:none">Este campo está vacio</div>
        <br><br>
        <label for="apellidos">apellidos</label>
        <br>
        <input type="text" name="apellidos" id="apellidos" value="">
        <div id="apellOcult" style="display:none">Este campo está vacio</div>
        <br><br>
        <label for="curso">edad</label>
        <br>
        <input type="text" name="edad" id="edad" value="">
        <div id="edadOcult" style="display:none">Este campo está vacio</div>
          <div id="edadOcult1" style="display:none">Este campo está vacio</div>
        <br><br>
        <label for="curso">curso</label>
        <br>
        <input type="text" name="curso" id="curso" value="">
        <div id="cusOcult" style="display:none">Este campo está vacio</div>
        <div id="cusOcult1" style="display:none">Este campo está vacio</div>
        <br><br>
        <input type="submit" value="enviar" onclick="return Comprobar()">
<script type="text/javascript" src="Comprobar.js">

</script>
  </body>
</html>
