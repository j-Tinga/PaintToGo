<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Request
 * 
 * @property int $request_id
 * @property int $user_id
 * @property int $branch_id
 * @property string $status
 * @property Carbon $created_at
 * 
 * @property User $user
 * @property Branch $branch
 * @property Collection|Requestlist[] $requestlists
 *
 * @package App\Models
 */
class Request extends Model
{
	protected $table = 'request';
	protected $primaryKey = 'request_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'branch_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'branch_id',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function branch()
	{
		return $this->belongsTo(Branch::class);
	}

	public function requestlists()
	{
		return $this->hasMany(Requestlist::class);
	}
}
