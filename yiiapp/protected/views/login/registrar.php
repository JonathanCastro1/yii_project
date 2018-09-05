<!-- 
<div class="row page-header col-md-6 col-md-offset-3 ">	
	<h2 class="fas fa-users">Register</h2>
</div>

<div class="row col-md-6 col-md-offset-3 ">

	<form action="register" method="post">
		
		<input type="hidden" name="ruta" value="user.png">

		<div class="form-group">
			
			<input type="text" name="nombre" placeholder="First Name" class="form-control" id="nombre">
		</div>

		<div class="form-group">
			
			<input type="text" name="apellido" placeholder="Last Name" class="form-control" id="apellido">
		</div>	
	

		<div class="form-group">
			
			<input type="text" id="datepicker" name="fecha" placeholder="Date" class="form-control" >
		</div>

		<div class="form-group">
			
			<input type="text" name="email" placeholder="Email" class="form-control" id="email">
		</div>

		<div class="form-group">			
			
			<select class="form-control" name="estado" id="estado">
				<option value="0">Select State</option>								
			</select>			
		</div>

		<div class="form-group">			
			
			<select class="form-control" name="capital" id="capital">
				<option value="0">Select Capital</option>				
			</select>			
		</div>
		

		<div class="form-group">
			
			<input type="text" name="usuario" placeholder="Username" class="form-control">
		</div>			
		
		<div class="form-group">
			
			<input type="password" name="contrasena" placeholder="Password" class="form-control">
		</div>
 -->
		<!-- <div class="form-group">
			
			<input type="password" name="confirmarContrasena" placeholder="Confirm password" class="form-control">
		</div> -->



		<!-- <div class="form-group">
			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Register</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>
		</div>

		<div class="form-group"> -->
			<!-- <a href=""><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Back</span></a> -->
<!-- 
			<?php //echo CHtml::link("Back",array("index"),array("class"=>"btn-default btn-sm glyphicon glyphicon-arrow-left"));?>  -->
		<!-- </div>		

	</form>	

<br>
<br>
<br>
<br>	
</div> -->
<div class="row page-header col-md-6 col-md-offset-3 ">	
	<h2 class="fas fa-users">Registrar</h2>
</div>


<div class="row col-md-6 col-md-offset-3 ">

	<?php $form=$this->beginWidget("CActiveForm");?>

	<div class="form-group">
	  <!-- 	<?php //echo $form->label($model,'Nombre'); ?> -->		
		<?php echo $form->textField($model,"nombre",array("class"=>"form-control",'placeholder'=>'Nombre'));?>
		<?php echo $form->error($model,"nombre",array("class"=>"bg-danger"));?>
	</div>

	<div class="form-group">
		<!-- <?php //echo $form->label($model,'Apellido'); ?>	 -->		
		<?php echo $form->textField($model,"apellido",array("class"=>"form-control",'placeholder'=>'Apellido'));?>
		<?php echo $form->error($model,"apellido",array("class"=>"bg-danger"));?>
	</div>

	<div class="form-group">
		<!-- <?php //echo $form->label($model,'Usuario'); ?>	 -->		
		<?php echo $form->textField($model,"usuario",array("class"=>"form-control",'placeholder'=>'Usuario'));?>
		<?php echo $form->error($model,"usuario",array("class"=>"bg-danger"));?>
	</div>

	<div class="form-group">
		<!-- <?php //echo $form->label($model,'Password'); ?>	 -->		
		<?php echo $form->passwordField($model,'contrasena',array("class"=>"form-control",'placeholder'=>'**********')) ?>
		<?php echo $form->error($model,"contrasena",array("class"=>"bg-danger"));?>
	</div>

	<div class="form-group">
		<!-- <?php //echo $form->label($model,'Estado'); ?>	 -->		
		<?php echo $form->dropDownList($model,'estado',array(""),array("class"=>"form-control")); ?>
		<?php echo $form->error($model,"estado",array("class"=>"bg-danger"));?>
	</div>		
        

	<div class="form-group">
	<?php echo CHtml::submitButton("Crear",array("class"=>"btn-primary btn-sm glyphicon glyphicon-ok"));?>

	<?php echo CHtml::submitButton("Crear",array("class"=>"btn-danger btn-sm glyphicon glyphicon-remove"));?>
	</div>

	<?php $this->endWidget();?>


</div>	