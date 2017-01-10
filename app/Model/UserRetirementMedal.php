<?php
App::uses('AppModel', 'Model');
/**
* Kennel Space
*
*
*/
class UserRetirementMedal extends AppModel {

	public $useTable = 'user_retirement_medals';

	public function getData($id)
	{
		return $this->query('SELECT * FROM user_retirement_medals JOIN shop_retirement_medals ON `user_retirement_medals`.`retirement_medal_id` = `shop_retirement_medals`.`id` WHERE user_id ='. $id);
	}
}

?>
