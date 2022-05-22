<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $product_id
 * @property int $brand_id
 * @property int $utility_id
 * @property string|null $product_name
 * @property float $price
 * @property int $retail_price
 * @property string $unit_sold_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Brand $brand
 * @property Utility $utility
 * @property Collection|Inventory[] $inventories
 * @property Collection|Requestlist[] $requestlists
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'product';
	protected $primaryKey = 'product_id';

	protected $casts = [
		'brand_id' => 'int',
		'utility_id' => 'int',
		'price' => 'float',
		'retail_price' => 'int'
	];

	protected $fillable = [
		'brand_id',
		'utility_id',
		'product_name',
		'price',
		'retail_price',
		'unit_sold_at'
	];

	public function brand()
	{
		return $this->belongsTo(Brand::class);
	}

	public function utility()
	{
		return $this->belongsTo(Utility::class);
	}

	public function inventories()
	{
		return $this->hasMany(Inventory::class);
	}

	public function requestlists()
	{
		return $this->hasMany(Requestlist::class);
	}
}
