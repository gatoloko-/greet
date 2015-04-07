<?php
	class sql{
		
		function __construct(){
			include 'conn/link.php';
			return $link;
		}
		
		public function getAllWhere($table, $where, $term){
			$data = array();
			$query = "SELECT * FROM ".$table." WHERE ".$where." = ".$term;
			$resultado = $plug->query($query);
			while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
				$data[] = $row;
			}		
			$plug->close();
				
			return $data;
		}
	}
?>