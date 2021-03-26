<?php

namespace App\Backend;

use App\Frontend\buyer;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{
	protected $fillable = [
		'price','status','sequence'
	];

	public function buyer()
	{
		return $this->hasMany(buyer::class,'price_range','id');
	}
}
