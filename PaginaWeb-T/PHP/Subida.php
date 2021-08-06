<?php
include "Header.php";
?>
    <link rel="stylesheet" href="../CCS/Estilos.css">
    
<form name="MiForm" id="MiForm" method="post" action="cargar.php">
        <h4 class="text-center">Seleccione imagen a cargar</h4>
        <div class="form-group">
          <label class="col-sm-2 control-label">Archivos</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="image" name="image">
          </div>
          <button name="submit" class="btn btn-primary">Cargar Imagen</button>
        </div>
      </form>