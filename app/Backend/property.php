<?php

namespace App\Backend;

use App\Frontend\buyer;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
	protected $fillable = [
		'property_name','status'
	];

	public function buyer()
	{
		return $this->hasMany(buyer::class,'property_type','id');
	}
}
