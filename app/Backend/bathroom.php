<?php

namespace App\Backend;

use App\Frontend\buyer;
use Illuminate\Database\Eloquent\Model;

class bathroom extends Model
{
	protected $fillable = [
		'bathroom_name','status'
	];

	public function buyer()
	{
		return $this->hasMany(buyer::class,'number_of_bathroom','id');
	}
}
