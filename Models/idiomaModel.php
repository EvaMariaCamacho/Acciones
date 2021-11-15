<?php 
require_once("Libraries/Core/Mysql.php");
trait Idioma{
	private $con;

	public function getIdioma(){
		$this->con = new Mysql();
		$sql = "SELECT * FROM idioma WHERE status != 0";
		$request = $this->con->select_all($sql);
		return $request;
	}
}

 ?>