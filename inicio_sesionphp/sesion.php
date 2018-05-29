<?PHP
$hostname="181.62.161.60";
$database="kubica";
$username="usuarios";
$password="grupocrecer321";
$json=array();
	if(isset($_GET["con_cod"]) && isset($_GET["per_cc"])){
		$con_cod=$_GET['con_cod'];
		$per_cc=$_GET['per_cc'];
		
		$conexion=mysqli_connect($hostname,$username,$password,$database);
		
		$consulta="SELECT * FROM contratos WHERE con_cod= '{$con_cod}' AND per_cc = '{$per_cc}'";
		$resultado=mysqli_query($conexion,$consulta);

		if($consulta){
		
			if($reg=mysqli_fetch_array($resultado)){
				$json['datos'][]=$reg;
			}
			mysqli_close($conexion);
			echo json_encode($json);
		}



		else{
			$results["con_cod"]='';
			$results["per_cc"]='';
			$results["nombre"]='';
			$results["tipoPlan"]='';
			$json['datos'][]=$results;
			echo json_encode($json);
		}
		
	}
	else{
		   	$results["con_cod"]='';
			$results["per_cc"]='';
			$results["nombre"]='';
			$results["tipoPlan"]='';
			$json['datos'][]=$results;
			echo json_encode($json);
		}
?>