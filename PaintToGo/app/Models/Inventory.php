<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventory
 * 
 * @property int $inventory_id
 * @property int $branch_id
 * @property int $product_id
 * @property int $quantity
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Branch $branch
 * @property Product $product
 *
 * @package App\Models
 */
class Inventory extends Model
{
	protected $table = 'inventory';
	protected $primaryKey = 'inventory_id';

	protected $casts = [
		'branch_id' => 'int',
		'product_id' => 'int',
		'quantity' => 'int'
	];

	protected $fillable = [
		'branch_id',
		'product_id',
		'quantity'
	];

	public function branch()
	{
		return $this->belongsTo(Branch::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
