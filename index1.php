<?php
require_once __DIR__.'/config.php';
class API{
	function select(){
		$db= new Connect;
		$users=array();
		$data=$db->prepare('SELECT * FROM users ORDER BY id');
		$data->execute();
		while($outputdata=$data->fetch(PDO::FETCH_ASSOC)){
			$users[$outputdata['id']] =array(
				'id' =>$outputdata['id'],
				'name'=>$outputdata['name'],
				'age'=>$outputdata['age']
			);
		}
		return json_encode($users);

	}
}
$api = new API;
header('Content-Type:application/json');
echo $api->select();

?>