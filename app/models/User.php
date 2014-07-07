<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getRememberToken()
{
    return $this->remember_token;
}

public function setRememberToken($value)
{
    $this->remember_token = $value;
}

public function getRememberTokenName()
{
    return 'remember_token';
}

protected $fillable = [
		'fname',
		'lname',
		'username',
		'password',
		'role'
];

public static $rules = [
	
	'username' => 'required|unique:users',
	'password' => 'required',
	'fname' => 'required',
	'lname' => 'required'
];

	public function scopeSearch($query, $search)
	{
		return $query->where(function($query) use ($search)
			{
				$query->where('fname', 'LIKE', "%$search%")
					  ->orWhere('lname', 'LIKE', "%$search%")
					  ->orWhere('username', 'LIKE', "%$search%")
					  ->orWhere('role', 'LIKE', "%$search%")
					  ->orWhere('id', 'LIKE', "%$search%");
			});
	}

}