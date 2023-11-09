<div id="addAuto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nuevo auto</h4>
      </div>
      <div class="modal-body">
		<form name="formAuto" onsubmit="registerAuto(); return false">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="modelo" type="text" class="form-control" name="modelo" placeholder="Modelo" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="año" type="text" class="form-control" name="año" placeholder="Año" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="color" type="text" class="form-control" name="color" placeholder="Color" required autocomplete="off">
		  </div>
          <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="pasajeros" type="text" class="form-control" name="pasajeros" placeholder="Pasajeros" required autocomplete="off">
		  </div>
          <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="cilindros" type="text" class="form-control" name="cilindros" placeholder="Cilindros" required autocomplete="off">
		  </div>
          <br>
          <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="transmision" type="text" class="form-control" name="transmision" placeholder="Transmision" required autocomplete="off">
		  </div>
          <br>
          <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="velocidad" type="text" class="form-control" name="velocidad" placeholder="Velocidad" required autocomplete="off">
		  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>

<div id="updateAuto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar información de auto</h4>        
      </div>
      <div class="modal-body">
		<form name="formAutoUpdate" onsubmit="updateauto(); return false">
		<input type="text" name="id" id="id" style="display: none;">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="modelo" type="text" class="form-control" name="modelo" placeholder="Modelo" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="año" type="text" class="form-control" name="año" placeholder="Año" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="color" type="text" class="form-control" name="color" placeholder="Color" required autocomplete="off">
		  </div>
          <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="pasajeros" type="text" class="form-control" name="pasajeros" placeholder="Pasajeros" required autocomplete="off">
		  </div>
          <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="cilindros" type="text" class="form-control" name="cilindros" placeholder="Cilindros" required autocomplete="off">
		  </div>
          <br>
          <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="transmision" type="text" class="form-control" name="transmision" placeholder="Transmision" required autocomplete="off">
		  </div>
          <br>
          <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="velocidad" type="text" class="form-control" name="velocidad" placeholder="Velocidad" required autocomplete="off">
		  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>
