<?php 

	class UsuariosModel extends Mysql
	{
		private $intIdUsuario;
		private $strIdentificacion;
		private $strNombre;
		private $strEmail;
		private $strPassword;
		private $strToken;
		private $intTipoId;
		private $intStatus;

		public function __construct()
		{
			parent::__construct();
		}	

		public function insertUsuario(string $identificacion, string $nombre, string $email, string $password, int $tipoid, int $status){

			$this->strIdentificacion = $identificacion;
			$this->strNombre = $nombre;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;
			$return = 0;

			$sql = "SELECT * FROM empresa WHERE 
					email_user = '{$this->strEmail}' or identificacion = '{$this->strIdentificacion}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO empresa(identificacion,nombres,email_user,password,rolid,status) 
								  VALUES(?,?,?,?,?,?)";
	        	$arrData = array($this->strIdentificacion,
        						$this->strNombre,
        						$this->strEmail,
        						$this->strPassword,
        						$this->intTipoId,
        						$this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
	        return $return;
		}

		public function selectUsuarios()
		{
			$sql = "SELECT e.idempresa,e.identificacion,e.nombres,e.email_user,e.status,r.nombrerol 
					FROM empresa e 
					INNER JOIN rol r
					ON e.rolid = r.idrol
					WHERE e.status != 0 ";
					$request = $this->select_all($sql);
					return $request;
		}
		public function selectUsuario(int $idempesa){
			$this->intIdUsuario = $idempresa;
			$sql = "SELECT e.idempresa,e.identificacion,e.nombres,e.email_user,e.identificador_fiscal,r.idrol,r.nombrerol,e.status, DATE_FORMAT(e.datecreated, '%d-%m-%Y') as fechaRegistro 
					FROM empresa e
					INNER JOIN rol r
					ON e.rolid = r.idrol
					WHERE e.idempresa = $this->intIdUsuario";
			$request = $this->select($sql);
			return $request;
		}

		public function updateUsuario(int $idUsuario, string $identificacion, string $nombre, string $email, string $password, int $tipoid, int $status){

			$this->intIdUsuario = $idUsuario;
			$this->strIdentificacion = $identificacion;
			$this->strNombre = $nombre;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;

			$sql = "SELECT * FROM empresa WHERE (email_user = '{$this->strEmail}' AND idempresa != $this->intIdUsuario)
										  OR (identificacion = '{$this->strIdentificacion}' AND idempresa != $this->intIdUsuario) ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				if($this->strPassword  != "")
				{
					$sql = "UPDATE empresa SET identificacion=?, nombres=?, email_user=?, password=?, rolid=?, status=? 
							WHERE idempresa = $this->intIdUsuario ";
					$arrData = array($this->strIdentificacion,
	        						$this->strNombre,
	        						$this->strEmail,
	        						$this->strPassword,
	        						$this->intTipoId,
	        						$this->intStatus);
				}else{
					$sql = "UPDATE emprea SET identificacion=?, nombres=?, email_user=?, rolid=?, status=? 
							WHERE idempresa = $this->intIdUsuario ";
					$arrData = array($this->strIdentificacion,
	        						$this->strNombre,
	        						$this->strEmail,
	        						$this->intTipoId,
	        						$this->intStatus);
				}
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
			return $request;
		
		}
		public function deleteUsuario(int $intIdempresa)
		{
			$this->intIdUsuario = $intIdempresa;
			$sql = "UPDATE empresa SET status = ? WHERE idempresa = $this->intIdUsuario ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

	}
 ?>