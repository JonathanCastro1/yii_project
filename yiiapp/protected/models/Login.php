<?php
class Login extends CActiveRecord
{
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);
	}

	public function tableName()
	{
		// se recomienda que el nombre de la tabla sea igual al modelo	
		return "usuarios";
	}

	public function rules()
	{
		return array(
			array("nombre, apellido, usuario, contrasena ,estado","required"),
		);
	}
	// public function getSelectName()
	// {
	// 	return $this->name." ".$this->id." =)";
	// }
}