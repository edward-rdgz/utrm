 <?php 
 
 class tallerjquerymobile
	{
		 protected static $servidor='localhost';
		 protected static $user_bd='root';
	
	  	 protected static $pass_bd='';
		
		 
		 protected $conn;
		 private $bd="tjquerymobile";
		 private $rows=array();
		function __construct()
		{
			$this->conn=new mysqli(self::$servidor,self::$user_bd,self::$pass_bd,$this->bd);
			$this->conn->set_charset("utf8");
			if($this->conn->connect_errno)
			{
				echo "Falla en la conexion(".$this->conn->connect_errno.")";
			}
		}
		
	}
	
	class alumno extends tallerjquerymobile {
		   private $usr,$pwd,$nombre,$apellido,$sexo,$edad;
		   
		   function __construct($usr=NULL,$pwd=NULL,$nombre=NULL,$apellido=NULL,$sexo=NULL,$edad=NULL){
			      $this->usr=$usr;
				  $this->pwd=$pwd;
				  $this->nombre=$nombre;
				  $this->apellido=$apellido;
				  $this->sexo=$sexo;
				  $this->edad=$edad;
				  parent::__construct();
			   }
			   function save(){
				      
					  $sql='INSERT INTO usuarios(usr,pwd,nombre,apellido,sexo,edad)VALUES(?,?,?,?,?,?)';
					   if($consulta=$this->conn->prepare($sql))
			 		   {
						   $consulta->bind_param('sssssi',$this->usr,$this->pwd,$this->nombre,$this->apellido,$this->sexo,$this->edad);
			 			   $consulta->execute();
						  return $consulta->insert_id;
						   
					   }
				   
				   
				   }
			   
			   function validar(){
				   $sql='SELECT idusr,usr,pwd FROM usuarios  WHERE usr = ? AND pwd = ?';
				    if($consulta=$this->conn->prepare($sql))
			 		{
						$this->pwd=md5($this->pwd); 
						$consulta->bind_param('ss',$this->usr,$this->pwd);
			 			$consulta->execute();
			 			$consulta->bind_result($idusr,$usr,$pwd);
			  			
						while ($consulta->fetch())
						 { 
			   				$this->rows=array("idusr"=>$idusr,"usr"=>$usr,"pwd"=>$pwd);
    		 			 }
						 
						if($this->rows['usr']!=$this->usr && $this->rows['pwd']!=$this->pwd)
						   $this->rows=array("idusr"=>'Fail',"usr"=>'Fail',"pwd"=>'Fail');
						   
						 return $this->rows;
						   
						
						 
						
					}
				   
				   
			   }
		
		}
		//$taller = new tallerjquerymobile();
	
?>
		