<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $order_id
 * @property int $branch_id
 * @property int $user_id
 * @property string $status
 * @property Carbon $created_at
 * 
 * @property User $user
 * @property Branch $branch
 * @property Collection|Orderlist[] $orderlists
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	protected $primaryKey = 'order_id';
	public $timestamps = false;

	protected $casts = [
		'branch_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'branch_id',
		'user_id',
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

	public function orderlists()
	{
		return $this->hasMany(Orderlist::class);
	}
}
