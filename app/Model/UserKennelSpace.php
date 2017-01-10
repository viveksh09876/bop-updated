<?php
App::uses('AppModel', 'Model');
/**
* Kennel Space
*
*
*/
class UserKennelSpace extends AppModel {

	public $useTable = 'user_kennel_spaces';
	public function getData($id)
	{
		return $this->query('SELECT * FROM user_kennel_spaces JOIN shop_kennel_spaces on `user_kennel_spaces`.`kennel_space_id` = `shop_kennel_spaces`.`id` WHERE user_id ='. $id);
	}
}

?>
