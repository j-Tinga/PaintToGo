<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Requestlist
 * 
 * @property int $requestlist_id
 * @property int $request_id
 * @property int $product_id
 * @property int $req_quantity
 * @property Carbon $created_at
 * 
 * @property Request $request
 * @property Product $product
 *
 * @package App\Models
 */
class Requestlist extends Model
{
	protected $table = 'requestlist';
	protected $primaryKey = 'requestlist_id';
	public $timestamps = false;

	protected $casts = [
		'request_id' => 'int',
		'product_id' => 'int',
		'req_quantity' => 'int'
	];

	protected $fillable = [
		'request_id',
		'product_id',
		'req_quantity'
	];

	public function request()
	{
		return $this->belongsTo(Request::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
