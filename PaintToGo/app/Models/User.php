<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $user_id
 * @property string $firstName
 * @property string $lastName
 * @property string $user_contact
 * @property string $email_add
 * @property string $password
 * @property string $level_name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Branch[] $branches
 * @property Collection|Consultation[] $consultations
 * @property Collection|Order[] $orders
 * @property Collection|Request[] $requests
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'user_id';

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'firstName',
		'lastName',
		'user_contact',
		'email_add',
		'password',
		'level_name'
	];

	public function branches()
	{
		return $this->hasMany(Branch::class);
	}

	public function consultations()
	{
		return $this->hasMany(Consultation::class);
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}

	public function requests()
	{
		return $this->hasMany(Request::class);
	}
}
