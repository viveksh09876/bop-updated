<?php
App::uses('AppModel', 'Model');
/**
* Kennel Space
*
*
*/
class UserEnergyBones extends AppModel {

	public $useTable = 'user_energy_bones';
	public function getData($id)
	{
		return $this->query('SELECT * FROM user_energy_bones JOIN shop_energy_bones ON `user_energy_bones`.`energy_bone_id` = `shop_energy_bones`.`id` WHERE user_id ='. $id);
	}
}

?>
