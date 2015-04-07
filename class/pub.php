<?php

include 'sql.php';
class publication extends sql {
	
	public function newPub($title, $type, $target, $photo, $active, $date, $user, $comunidad){
		$query = 'INSERT INTO publicacion(title, type, target, photo, active, date, user, cominidad) VALUES('.$title.', '.$type.', '.$target.', "'.$photo.'", '.$active.', "'.$date.'", '.$user.', '.$comunidad.')';
		$link->query($query);
		$result = $link->insert_id;
		if(isset($result)){
			return $result;
		}
	}
}


?>