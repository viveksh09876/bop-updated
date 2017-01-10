<?php
App::uses('AppModel', 'Model');
/**
*Employer licences purchased by user
*
*
*/
class UserLicence extends AppModel {

	public $useTable = 'user_licences';
	public function getData($id)
	{
		return $this->query('SELECT * FROM user_licences JOIN shop_employer_licences ON `user_licences`.`employer_licence_id` = `shop_employer_licences`.`id` WHERE user_id ='. $id);
	}
	
	public function getLatestEntry($id)
	{
		return $this->query('SELECT * FROM user_licences JOIN shop_employer_licences ON `user_licences`.`employer_licence_id` = `shop_employer_licences`.`id` WHERE user_id ='. $id.' ORDER BY id DESC LIMIT 1');
	}
}

?>