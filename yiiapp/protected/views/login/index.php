<br>
<br>
<br>

<div class="login row page-header  col-md-6 col-lg-6 col-md-offset-3">


	<h2 class="fas fa-building">Login Beta 1.0</h2>
</div>

<div class="row col-md-6 col-lg-6 col-md-offset-3 ">


	<form action="" method="post">
		<div class="form-group">
			<label type="hidden" id="usuarioM"></label>
			<input type="text" name="usuario" placeholder="Email or Username" class="form-control" id="usuario">
		</div>	
		
		<div class="form-group">
			<label type="hidden" id="contrasenaM"></label>
			<input type="password" name="contrasena" placeholder="*******" class="form-control" id="contrasena">
		</div>

		<div class="form-group" >		
			<select name="role" class="form-control " id="role">
				<option value="0">Select Role</option>					
			</select>
		</div>

		<div class="form-group">
			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok" >Login</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>
		</div>

		<div class="form-group">
			<a href="" >Logearse</a>
			<!-- <a href="">Registro</a> -->
			<?php echo CHtml::link("registrar",array("registrar"));?> 
		</div>

		<!-- <div class="form-group">
			<a href="" >Register</a>
		</div>	 -->		

	</form>	


<br>
<br>
<br>
<br>

</div>
