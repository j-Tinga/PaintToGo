<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Orderlist
 * 
 * @property int $orderlist_id
 * @property int $order_id
 * @property int $product_id
 * @property int $order_quantity
 * @property Carbon $created_at
 * 
 * @property Order $order
 *
 * @package App\Models
 */
class Orderlist extends Model
{
	protected $table = 'orderlist';
	protected $primaryKey = 'orderlist_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'product_id' => 'int',
		'order_quantity' => 'int'
	];

	protected $fillable = [
		'order_id',
		'product_id',
		'order_quantity'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}
}
