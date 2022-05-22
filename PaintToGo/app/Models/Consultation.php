<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Consultation
 * 
 * @property int $consultation_id
 * @property int $user_id
 * @property string $consult_description
 * @property string $status
 * @property Carbon $created_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Consultation extends Model
{
	protected $table = 'consultations';
	protected $primaryKey = 'consultation_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'consult_description',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
