<?php
class Content extends AppModel {

	public $name = 'Content';
	public $validate = array(
		'account_id' => array('notEmpty'),
		'study_name' => array('notEmpty'),
		'url' => array(
			array(
				'rule' => array('url'),
				'message' => 'This field needs url format',
			), 
			array(
				'rule' => array('notempty'),
				'message' => 'not empty',
			),
		),
	);

	public $belongsTo = array('Account', 'Study');

	public function beforeValidate() {
		$study_id = $this->Session->read('Study.id');
		if (!$study_id) {
			return false;
		}
		$this->data[$this->alias]['study_id'] = $study_id;
	}

}
?>