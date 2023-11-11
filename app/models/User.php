<?php

class User extends UserCustom {

	protected $table = TABLE_USER;
	protected $appends = ['unread_messages'];

	public static $ROLES = array(
		8 => array(
			'name' => 'admin',
			'level' => 3
		),
		9 => array(
			'name' => 'teacher',
			'level' => 2
		),
		10 => array(
			'name' => 'student',
			'level' => 1
		),
	);

	public function getUnreadMessagesAttribute($value) {
        $messages = Message::where('to_id', $this->attributes['id'])->where('is_read', '0')->count();
		return $messages;
    }

	public function roles() {
		print_r($this);
		//return $this->getUserRole();
		return '324';
	}

	public static function getUserRole() {
		if(!isset(User::$ROLES[$roleId])) return false;
		return User::$ROLES[$roleId];
	}

	public static function getRole($roleId) {
		if(!isset(User::$ROLES[$roleId])) return false;
		return User::$ROLES[$roleId];
	}

	protected function rules()
	{
		$rules = array(
			'email' => 'required|unique:' . TABLE_USER . ',email,' . $this->id . '|email',
			'login' => 'required|unique:' . TABLE_USER . ',login,' . $this->id . '|regex:#^[a-z\\d]{3,}$#',
			//'password' => 'min:7|confirmed',
			'password' => 'min:7',
		);

		if (!$this->id)
		{
			$rules['password'] .= '|required';
		}

		$fields = UserField::where('hidden', false)->get();

		foreach ($fields as $field)
		{
			if ($field->required && !in_array($field->fieldType->alias, array('options', 'pages')))
			{
				$rules['field_' . $field->alias] = 'required';
			}
		}

		return $rules;
	}

}
